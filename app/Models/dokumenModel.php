<?php

namespace App\Models;

use CodeIgniter\Model;

class dokumenModel extends Model
{
    protected $table = 'tbl_dokumen';
    protected $primaryKey = 'id_dokumen';
    protected $allowedFields = ['nama_dokumen', 'deskripsi', 'link'];

    public function data_dokumen($id_dokumen)
    {
        return $this->find($id_dokumen);
    }

    public function update_data($data, $id_dokumen)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_dokumen' => $id_dokumen)
        );
        return $query;
    }

    public function delete_data($id_dokumen)
    {
        $query = $this->db->table($this->table)->delete(array('id_dokumen' => $id_dokumen));
        return $query;
    }
}
