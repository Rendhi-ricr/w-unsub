<?php

namespace App\Models;

use CodeIgniter\Model;

class fasilitasModel extends Model
{
    protected $table = 'tbl_fasilitas'; 
    protected $allowedFields = ['nama_fasilitas', 'deskripsi', 'gambar'];

    public function get_data($nama_fasilitas, $deskripsi, $gambar)
    {
        return $this->db->table($this->table)
            ->where(['nama_fasilitas' => $nama_fasilitas, 
            'deskripsi' => $deskripsi, 
            'gambar' => $gambar
            ])
            ->get()
            ->getRowArray();
    }
}
