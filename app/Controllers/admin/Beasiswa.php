<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\BeasiswaModel;

class Beasiswa extends BaseController
{
    protected $beasiswa;

    public function __construct()
    {
        $this->beasiswa = new BeasiswaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Beasiswa',
            'beasiswa' => $this->beasiswa->findAll()
        ];
        return view('admin/beasiswa/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Beasiswa'
        ];
        return view('admin/beasiswa/tambah', $data);
    }

    public function simpan()
    {
        $this->beasiswa->save([
            'nama_beasiswa' => $this->request->getPost('nama_beasiswa'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ]);
        return redirect()->to('/admin/beasiswa')->with('success', 'Data beasiswa berhasil disimpan');
    }

    public function edit($id_beasiswa)
    {
        $beasiswa = $this->beasiswa->find($id_beasiswa);
        if (!$beasiswa) {
            return redirect()->to('/admin/beasiswa')->with('error', 'Data tidak ditemukan');
        }

        $data = [
            'title' => 'Edit Beasiswa',
            'beasiswa' => $beasiswa
        ];
        return view('admin/beasiswa/edit', $data);
    }

    public function update($id_beasiswa)
    {
        $this->beasiswa->update($id_beasiswa, [
            'nama_beasiswa' => $this->request->getPost('nama_beasiswa'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ]);
        return redirect()->to('/admin/beasiswa')->with('success', 'Data beasiswa berhasil diperbarui');
    }

    public function delete($id_beasiswa)
    {
        // penghapusan database
        $this->beasiswa->delete_data($id_beasiswa);

        // mengakses halaman berita
        return redirect()->to('admin/beasiswa');
    }
}
