<?php

namespace App\Models;

use CodeIgniter\Model;

class sejarahModel extends Model
{
    protected $table = 'tbl_sejarah'; 
    protected $allowedFields = ['deskripsi']; 

    public function get_data($deskripsi)
    {
        return $this->db->table($this->table)
            ->where([
                'deskripsi' => $deskripsi
            ])
            ->get()
            ->getRowArray();
    }
}
