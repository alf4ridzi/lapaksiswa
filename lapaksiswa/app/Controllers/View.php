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

    public function kategori($kategori_pencarian)
    {
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

    public function search()
    {
        $keyword = $this->request->getGet('keyword') ? htmlspecialchars($this->request->getGet('keyword')) : '';
        $kategoriFilter = $this->request->getGet('kategori') ? htmlspecialchars($this->request->getGet('kategori'), ENT_QUOTES, 'UTF-8') : null;
        $hargaMin = $this->request->getGet('harga_min') ? htmlspecialchars($this->request->getGet('harga_min'), ENT_QUOTES, 'UTF-8') : 0;
        $hargaMax = $this->request->getGet('harga_max') ? htmlspecialchars($this->request->getGet('harga_max'), ENT_QUOTES, 'UTF-8') : 0;
        $kondisiFilter = $this->request->getGet('kondisi') ? htmlspecialchars($this->request->getGet('kondisi'), ENT_QUOTES, 'UTF-8') : null;
        $urutan = $this->request->getGet('urutan') ? htmlspecialchars($this->request->getGet('urutan'), ENT_QUOTES, 'UTF-8') : null;

        $produkModel = new ProdukModel();
        $produk = $produkModel->select('*')
            ->groupStart()
            ->like('nama', $keyword)
            ->orLike('kategori', $keyword)
            ->groupEnd();

        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->getMetode();

        $kategoriLike = $kategoriModel->like('kategori', $keyword)->findAll();

        if ($kategoriFilter) {
            $produk = $produk->groupStart()
                ->like('kategori', $kategoriFilter)
                ->groupEnd();
        }

        if ($hargaMin > 0 && $hargaMax > $hargaMin) {
            $produk = $produk->where('harga >=', $hargaMin)
                ->where('harga <=', $hargaMax);
        }

        if ($kondisiFilter && in_array($kondisiFilter, ['baru', 'bekas'])) {
            $produk = $produk->where('kondisi', $kondisiFilter);
        }

        if ($urutan && in_array($urutan, ['terlama', 'terbaru'])) {
            switch ($urutan) {
                case 'terlama':
                    $produk = $produk->orderBy('created_at', 'ASC');
                    break;
                case 'terbaru':
                    $produk = $produk->orderBy('created_at', 'DESC');
                    break;
            }
        }

        $produk = $produk->findAll();

        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'produk' => $produk,
            'pembayaran' => $pembayaran,
            'keyword' => $keyword,
            'kategoriLike' => $kategoriLike
        ];

        return view('search', $data);
    }


    public function produk($slug)
    {
        $produkModel = new ProdukModel();
        $produk = $produkModel->where('produk_slug', $slug)->first();

        $websiteModel = new WebsiteModel();
        $web = $websiteModel->getSettings();

        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->getKategori();

        $pembayaranModel = new PembayaranModel();
        $pembayaran = $pembayaranModel->getMetode();

        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $relatedProduk = $produkModel->where('nama', $produk['nama'])
            ->where('kategori', $produk['kategori'])
            ->where('nama !=', $produk['nama'])->findAll();


        $data = [
            'web' => $web,
            'kategori' => $kategori,
            'produk' => $produk,
            'pembayaran' => $pembayaran,
            'related' => $relatedProduk
        ];

        return view('produk', $data);
    }
}
