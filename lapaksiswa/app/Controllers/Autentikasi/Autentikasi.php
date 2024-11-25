<?php

namespace App\Controllers\Autentikasi;
use App\Controllers\BaseController;
use App\Models\WebsiteModel;
use App\Models\KategoriModel;
use App\Models\UserModel;
use CodeIgniter\CodeIgniter;

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

        $data = [
            'web' => $web,
            'kategori' => $kategori
        ];

        return view('autentikasi/login', $data);
    }

    public function register()
    {
        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $data = [
            'web' => $web,
            'kategori' => $kategori
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

            return redirect()->to('/');
        }

        $userModel = new UserModel();
        $username = htmlspecialchars($this->request->getPost('username'), ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($this->request->getPost('password'), ENT_QUOTES, 'UTF-8');

        if (!$userModel->validasiUserLogin($username, $password)) {
            $this->session->setFlashdata('error', 'Username/Password Salah.');
            return redirect()->to('masuk');
        }

        $user = $userModel->where('username', $username)->first();

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
        $data['nomorhp'] = htmlspecialchars($data['nomorhp'], ENT_QUOTES, 'UTF-8');
        $data['password'] = htmlspecialchars($data['password'], ENT_QUOTES, 'UTF-8');
        $data['confirmpassword'] = htmlspecialchars($data['confirmpassword'], ENT_QUOTES, 'UTF-8');
        
        if (empty($data['username']) || empty($data['email']) || empty($data['nomorhp']) || empty($data['password']) || empty($data['confirmpassword'])) {
            $this->session->setFlashdata('error', 'Mohon Lengkapi Data!');
            return redirect()->to('register');
        }

        if ($data['password'] !== $data['confirmpassword']) {
            $this->session->setFlashdata('error', 'Password tidak sama!');
            return redirect()->to('register');
        }

        $userModel = new UserModel();
        $userModel->register($data);

        
    }
}
