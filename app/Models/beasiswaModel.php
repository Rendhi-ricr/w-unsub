<?php

namespace App\Models;

use CodeIgniter\Model;

class beasiswaModel extends Model
{
    protected $table = 'tbl_beasiswa';
    protected $primaryKey = 'id_beasiswa';
    protected $allowedFields = ['nama_beasiswa', 'deskripsi'];

    public function data_beasiswa($id_beasiswa)
    {
        return $this->find($id_beasiswa);
    }

    public function update_data($data, $id_beasiswa)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_beasiswa' => $id_beasiswa)
        );
        return $query;
    }

    public function delete_data($id_beasiswa)
    {
        $query = $this->db->table($this->table)->delete(array('id_beasiswa' => $id_beasiswa));
        return $query;
    }
}
