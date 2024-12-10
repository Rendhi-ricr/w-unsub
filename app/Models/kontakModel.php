<?php

namespace App\Models;

use CodeIgniter\Model;

class kontakModel extends Model
{
    protected $table = 'tbl_kontak'; 
    protected $allowedFields = ['nomor_telepon', 'email', 'alamat'];

    public function get_data($nomor_telepon, $email, $alamat)
    {
        return $this->db->table($this->table)
            ->where(['nomor_telepon' => $nomor_telepon, 
            'email' => $email, 
            'alamat' => $alamat
            ])
            ->get()
            ->getRowArray();
    }
}
