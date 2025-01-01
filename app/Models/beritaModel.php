<?php

namespace App\Models;

use CodeIgniter\Model;

class beritaModel extends Model
{
    protected $table = 'tbl_berita';
    protected $primaryKey = 'id_berita';
    protected $allowedFields = ['judul_berita', 'deskripsi', 'tanggal', 'gambar'];

    public function data_berita($id_berita)
    {
        return $this->find($id_berita);
    }

    public function update_data($data, $id_berita)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_berita' => $id_berita)
        );
        return $query;
    }

    public function delete_data($id_berita)
    {
        $query = $this->db->table($this->table)->delete(array('id_berita' => $id_berita));
        return $query;
    }
}
