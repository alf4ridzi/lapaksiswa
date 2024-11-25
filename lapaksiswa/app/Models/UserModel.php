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

    public function validasiUserLogin($username, $password) {
        $user = $this->where('username', $username)->first();

        if (!$user) {
            return false;
        }

        return password_verify($password, $user['password']);

    }

    public function tambahData($data) {
        $this->save($data);
    }
}