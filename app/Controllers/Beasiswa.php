<?php

namespace App\Controllers;

use App\Models\beasiswaModel;

use App\Controllers\BaseController;
// use App\Models\VisitorCountModel;

class Beasiswa extends BaseController
{
    protected $beasiswa;

    public function __construct()
    {
        $this->beasiswa = new beasiswaModel();
    }

    public function index()
    {
        $beasiswa = $this->beasiswa->findAll();
        $data = [
            'beasiswa' => $beasiswa
        ];
        return view('beasiswa', $data);
    }

    public function aindex()
    {
        $data = [
            'title' => 'Data Beasiswa',
            'beasiswa' => $this->beasiswa->findAll()
        ];
        return view('VA_beasiswa', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Beasiswa'
        ];
        return view('t_beasiswa', $data);
    }

    public function simpan()
    {
        $this->beasiswa->save([
            'nama_beasiswa' => $this->request->getPost('nama_beasiswa'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ]);
        return redirect()->to('beasiswa/aindex')->with('success', 'Data beasiswa berhasil disimpan');
    }

    public function edit($id_beasiswa)
    {
        $beasiswa = $this->beasiswa->find($id_beasiswa);
        if (!$beasiswa) {
            return redirect()->to('beasiswa/aindex')->with('error', 'Data tidak ditemukan');
        }

        $data = [
            'title' => 'Edit Beasiswa',
            'beasiswa' => $beasiswa
        ];
        return view('e_beasiswa', $data);
    }

    public function update($id_beasiswa)
    {
        $this->beasiswa->update($id_beasiswa, [
            'nama_beasiswa' => $this->request->getPost('nama_beasiswa'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ]);
        return redirect()->to('beasiswa/aindex')->with('success', 'Data beasiswa berhasil diperbarui');
    }

    public function delete($id_beasiswa)
    {
        // penghapusan database
        $this->beasiswa->delete_data($id_beasiswa);

        // mengakses halaman berita
        return redirect()->to('beasiswa/aindex');
    }
}
