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

}