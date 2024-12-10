<?php

namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    protected $table = 'tbl_user'; 
    protected $allowedFields = ['email', 'password', 'nama_pengguna']; 

    public function get_data($email, $password, $nama_pengguna)
    {
        return $this->db->table($this->table)
            ->where([
                'email' => $email,
                'password' => $password,
                'nama_pengguna' => $nama_pengguna,
            ])
            ->get()
            ->getRowArray();
    }
}
