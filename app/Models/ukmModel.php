<?php

namespace App\Models;

use CodeIgniter\Model;

class ukmModel extends Model
{
    protected $table = 'tbl_ukm';
    protected $primaryKey = 'id_ukm';
    protected $allowedFields = ['nama_ukm', 'deskripsi', 'gambar', 'kontak'];

    public function data_ukm($id_ukm)
    {
        return $this->find($id_ukm);
    }

    public function update_data($data, $id_ukm)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_ukm' => $id_ukm)
        );
        return $query;
    }

    public function delete_data($id_ukm)
    {
        $query = $this->db->table($this->table)->delete(array('id_ukm' => $id_ukm));
        return $query;
    }
}
