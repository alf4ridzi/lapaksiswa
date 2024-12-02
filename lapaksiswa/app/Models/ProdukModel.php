<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'produk_id',
        'nama',
        'nama_toko',
        'produk_slug',
        'terjual',
        'kategori',
        'rating',
        'harga',
        'stok',
        'deskripsi',
        'varian',
        'diskon',
        'status_produk',
        'unit',
        'foto',
        'created_at',
        'updated_at'
    ];

    public function getAllProduk()
    {
        return $this->findAll();
    }

    public function getTerlaris() {
        $max = 8;
        $data = $this->findAll();

        usort($data, function($a, $b) {
            return $b['terjual'] - $a['terjual'];
        });

        $terlaris =  array_slice($data, 0, $max);
        return $terlaris;
    }

    public function getTerbaru() {

    }

    public function getRekomendasi() {

    }

    public function getKategori(string $kategori) {
        $kategori = strtolower($kategori);
        
        $data = $this->like('kategori', $kategori)->findAll();
        return $data;
    }
}