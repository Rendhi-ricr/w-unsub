<?php

namespace App\Models;

use CodeIgniter\Model;

class dokumenModel extends Model
{
    protected $table = 'tbl_dokumen'; 
    protected $allowedFields = ['nama_dokumen', 'deskripsi', 'link'];

    public function get_data($nama_dokumen, $deskripsi, $link)
    {
        return $this->db->table($this->table)
            ->where(['nama_dokumen' => $nama_dokumen, 'deskripsi' => $deskripsi, 'link' => $link])
            ->get()
            ->getRowArray();
    }
}
