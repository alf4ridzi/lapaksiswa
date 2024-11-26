<?php

namespace App\Controllers;
use App\Models\WebsiteModel;
use App\Models\KategoriModel;
use App\Models\ProdukModel;
use App\Models\PembayaranModel;

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

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->getMetode();

        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'produk' => $produk,
            'pembayaran' => $pembayaran
        ];

        return view('index', $data);
    }
}
