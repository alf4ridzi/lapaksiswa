<?php

namespace App\Controllers\Autentikasi;
use App\Controllers\BaseController;
use App\Models\WebsiteModel;
use App\Models\KategoriModel;
use App\Models\UserModel;
use CodeIgniter\CodeIgniter;
use App\Models\PembayaranModel;

class Autentikasi extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }

    public function login(): string
    {

    
        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->getMetode();

        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'pembayaran' => $pembayaran
        ];

        return view('autentikasi/login', $data);
    }

    public function register()
    {
        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->getMetode();
        
        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'pembayaran' => $pembayaran
        ];

        return view('autentikasi/register', $data);
    }

    public function validasiMasuk()
    {
        if ($this->request->getMethod() !== 'post') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if ($this->session->has('isLogin')) {
            if ($this->session->get('role') === 'seller') {
                return redirect()->to('seller');
            }

            return redirect()->to('user');
        }

        $userModel = new UserModel();
        $login = htmlspecialchars($this->request->getPost('login'), ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($this->request->getPost('password'), ENT_QUOTES, 'UTF-8');

        $loginTipe = 'username';

        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $loginTipe = 'email';
        }

        if (!$userModel->validasiUserLogin($login, $password, $loginTipe)) {
            $this->session->setFlashdata('error', ucfirst($loginTipe) . '/Password Salah.');
            return redirect()->to('login');
        }

        $user = $userModel->where($loginTipe, $login)->first();

        $sessLogin = [
            'isLogin' => true,
            'role' => $user['role'],
            'username' => $user['username'],
            'nama' => $user['nama']
        ];

        $this->session->set($sessLogin);

        if ($user['role'] === 'seller') {
            $this->session->setFlashdata('sukses', 'Selamat Datang Seller!');
            return redirect()->to('seller');
        }

        return redirect()->to('/');

    }

    public function prosesRegister() {
        if ($this->request->getMethod() !== 'post') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = $this->request->getPost();

        $data['username'] = htmlspecialchars($data['username'], ENT_QUOTES, 'UTF-8');
        $data['email'] = htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8');
        $data['no_hp'] = htmlspecialchars($data['no_hp'], ENT_QUOTES, 'UTF-8');
        $data['password'] = htmlspecialchars($data['password'], ENT_QUOTES, 'UTF-8');
        $data['confirmpassword'] = htmlspecialchars($data['confirmpassword'], ENT_QUOTES, 'UTF-8');
        
        $rules = [
            'username' => 'required|max_length[30]',
            'email' => 'required|max_length[255]|valid_email',
            'no_hp' => 'required|max_length[50]',
            'password' => 'required|max_length[255]|min_length[8]',
            'confirmpassword' => 'required|max_length[255]|matches[password]'
        ];


        if (!$this->validate($rules, $data)) {
            $this->session->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('register');
        }

        // cek apakah email, username, nomorhp sudah ada
        $userModel = new UserModel();
        $cekAkun = $userModel->cekData($data['username'], $data['email'], $data['no_hp']);

        if (!$cekAkun['status']) {
            $this->session->setFlashdata('error', $cekAkun['msg']);
            return redirect()->to('register');
        }
        
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        
        $userModel->tambahData($data);

        $this->session->setFlashdata('sukses', 'Register Berhasil! Silahkan Login');
        
        return redirect()->to('login');
    }

    public function keluar() {
        $sessData = [
            'isLogin',
            'role',
            'username',
            'nama'
        ];

        $this->session->remove($sessData);
        
        return redirect()->to('/');
    }
}
