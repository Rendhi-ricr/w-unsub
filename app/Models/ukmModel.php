<?php

namespace App\Models;

use CodeIgniter\Model;

class ukmModel extends Model
{
    protected $table = 'tbl_ukm'; 
    protected $allowedFields = ['nama_ukm', 'deskripsi', 'gambar', 'kontak']; 

    public function get_data($nama_ukm, $deskripsi, $gambar, $kontak)
    {
        return $this->db->table($this->table)
            ->where([
                'nama_ukm' => $nama_ukm,
                'deskripsi' => $deskripsi,
                'gambar' => $gambar,
                'kontak' => $kontak
            ])
            ->get()
            ->getRowArray();
    }
}
