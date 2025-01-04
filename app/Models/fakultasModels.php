<?php

namespace App\Models;

use CodeIgniter\Model;

class fakultasModels extends Model
{
    protected $table = 'tbl_fakultas';
    protected $primaryKey = 'id_fakultas';
    protected $allowedFields = ['nama_fakultas', 'prodi', 'link'];

    public function data_fakultas($id_fakultas)
    {
        return $this->find($id_fakultas);
    }

    public function update_data($data, $id_fakultas)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_fakultas' => $id_fakultas)
        );
        return $query;
    }

    public function delete_data($id_fakultas)
    {
        $query = $this->db->table($this->table)->delete(array('id_fakultas' => $id_fakultas));
        return $query;
    }
}
