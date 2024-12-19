<?php

namespace App\Models;

use CodeIgniter\Model;

class fasilitasModel extends Model
{
    protected $table = 'tbl_fasilitas';
    protected $primaryKey = 'id_fasilitas';
    protected $allowedFields = ['nama_fasilitas', 'deskripsi', 'gambar'];

    public function data_fasilitas($id_fasilitas)
    {
        return $this->find($id_fasilitas);
    }

    public function update_data($data, $id_fasilitas)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_fasilitas' => $id_fasilitas)
        );
        return $query;
    }

    public function delete_data($id_fasilitas)
    {
        $query = $this->db->table($this->table)->delete(array('id_fasilitas' => $id_fasilitas));
        return $query;
    }
}
