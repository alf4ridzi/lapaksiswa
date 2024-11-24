<?php

namespace App\Controllers;
use App\Models\WebsiteModel;
use App\Models\KategoriModel;
use App\Models\ProdukModel;

class View extends BaseController
{
    public function index(): string
    {
        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $produkModel = new ProdukModel();
        $produk = $produkModel->getAllProduk();

        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'produk' => $produk
        ];

        return view('index', $data);
    }
}
