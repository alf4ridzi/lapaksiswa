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

        $terlaris = $produkModel->getTerlaris();
        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'produk' => $produk,
            'pembayaran' => $pembayaran,
            'terlaris' => $terlaris
        ];

        return view('index', $data);
    }

    public function kategori($kategori_pencarian) {
        $produkModel = new ProdukModel();
        $produk = $produkModel->getKategori($kategori_pencarian);

        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->getMetode();

        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'produk' => $produk,
            'pembayaran' => $pembayaran,
            'nama_kategori' => $kategori_pencarian
        ];

        return view('kategori', $data);
    }

    public function search($keyword) {
        $produkModel = new ProdukModel();
        $produk = $produkModel->like('nama', $keyword)
        ->orLike('kategori', $keyword)->findAll();

        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->getMetode();

        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'produk' => $produk,
            'pembayaran' => $pembayaran,
            'keyword' => $keyword
        ];

        return view('search', $data);
    }

    public function produk($slug) {
        $produkModel = new ProdukModel();
        $produk = $produkModel->where('produk_slug', $slug)->first();
        
        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->getMetode();

        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'produk' => $produk,
            'pembayaran' => $pembayaran,
        ];

        return view('produk', $data);
    }
}
