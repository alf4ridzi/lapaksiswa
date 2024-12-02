<?php

namespace App\Controllers\Api;
use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function search($keyword)
    {
        if (!$this->request->is('get'))  {
            return $this->response->setJSON(['success' => false, 'data' => [], 'msg' => 'GET Only']);
        }

        $produkModel = new ProdukModel();
        $keyword = htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8');
        $produk = $produkModel->like('nama', $keyword)
        ->orLike('kategori', $keyword)
        ->findAll();

        $data = [
            'success' => true,
            'data' => $produk,
            'msg' => null
        ];

        return $this->response->setJSON($data);
    }
}
