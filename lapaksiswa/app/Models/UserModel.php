<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'username',
        'nama',
        'tanggal_lahir',
        'email',
        'no_hp',
        'role',
        'foto',
        'alamat',
        'kelas',
        'password',
        'token_reset_password',
        'last_online'
    ];

    public function getDataUser(string $username) {
        $data = $this->where('username', $username)->first();

        return $data;
    }

    public function validasiUserLogin($login, $password, $loginTipe) {
        $user = $this->where($loginTipe, $login)->first();

        if (!$user) {
            return false;
        }

        return password_verify($password, $user['password']);

    }

    public function tambahData($data) {
        $this->save($data);
    }

    public function cekData($username, $email, $nomorhp) {
        $cekUser = $this->where('username', $username)->first();
        if ($cekUser) {
            return [
                'status' => false,
                'msg' => 'Username sudah digunakan!'
            ];
        }

        $cekEmail = $this->where('email', $email)->first();
        if ($cekEmail) {
            return [
                'status' => false,
                'msg' => 'Email sudah digunakan!'
            ];
        }

        $cekNomorHP = $this->where('no_hp', $nomorhp)->first();
        if ($cekNomorHP) {
            return [
                'status' => false,
                'msg' => 'Nomor HP sudah digunakan!'
            ];
        }

        return [
            'status' => true,
            'msg' => ''
        ];
    }
}