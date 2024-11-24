<?php

namespace App\Controllers\Autentikasi;
use App\Controllers\BaseController;
use App\Models\WebsiteModel;
use App\Models\KategoriModel;

class Autentikasi extends BaseController
{
    public function __construct() {
        
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

    public function register() {
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
}
