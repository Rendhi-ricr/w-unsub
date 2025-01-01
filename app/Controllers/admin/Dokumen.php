<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\dokumenModel;

class Dokumen extends BaseController
{
    protected $dok;

    public function __construct()
    {
        $this->dok = new dokumenModel();
    }

    public function index()
    {
        $dok = $this->dok->findAll();
        $data = [
            'dok' => $dok
        ];
        return view('admin/dokumen/index', $data);
    }

    public function tambah()
    {
        return view('admin/dokumen/tambah');
    }

    public function simpan()
    {
        $model  = $this->dok->save([
            'nama_dokumen' => $this->request->getPost('nama_dokumen'),
            'link' => $this->request->getPost('link'),
        ]);
        if ($model) {
            return redirect()->to('admin/dokumen')->with('success', 'Data berhasil di tambahkan!');
        } else {
            return redirect()->back()->with('error', 'Data gagal di tambahkan!');
        }
    }

    public function edit($id_dokumen)
    {
        $dok = $this->dok->data_dokumen($id_dokumen);
        $data = [
            'title' => 'Edit Data Dokument',
            'd' => $dok,
        ];

        return view('admin/dokumen/edit', $data);
    }

    public function update($id_dokumen)
    {
        $model = new dokumenModel();

        $data = [
            'nama_dokumen' => $this->request->getPost('nama_dokumen'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link' => $this->request->getPost('link'),
        ];

        if (!$model->update($id_dokumen, $data)) {
            return redirect()->to('/admin/dokumen')->with('error', 'Gagal memperbarui data.');
        }

        return redirect()->to('/admin/dokumen')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id_dokumen)
    {
        // penghapusan database
        $this->dok->delete_data($id_dokumen);

        // mengakses halaman berita
        return redirect()->to('admin/dokumen');
    }
}
