<?php

namespace App\Controllers\User;
use App\Controllers\BaseController;
use App\Models\WebsiteModel;
use App\Models\KategoriModel;
use App\Models\ProdukModel;
use App\Models\PembayaranModel;
use App\Models\UserModel;

class View extends BaseController
{

    public function __construct() {
        $this->session = session();
    }
    public function dashboard()
    {

        
        if (!$this->session->has('isLogin')) {
            $this->session->setFlashdata('error', 'Anda harus login terlebih dahulu!');
            return redirect()->to('login');
        }

        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $produkModel = new ProdukModel();
        $produk = $produkModel->getAllProduk();

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->getMetode();

        $username = $this->session->get('username');
        $userModel = new UserModel();
        $user = $userModel->getDataUser($username);

        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'produk' => $produk,
            'pembayaran' => $pembayaran,
            'user' => $user
        ];

        return view('user/dashboard', $data);
    }
}
