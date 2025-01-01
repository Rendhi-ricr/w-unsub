<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\fasilitasModel;

class Fasilitas extends BaseController
{
    protected $fasilitas;

    public function __construct()
    {
        $this->fasilitas = new fasilitasModel();
    }

    public function index()
    {
        $fasilitas = $this->fasilitas->findAll();
        $data = [
            'title' => 'Data Fasilitas',
            'fasilitas' => $fasilitas
        ];
        return view('admin/fasilitas/index', $data);
    }

    public function tambah()
    {
        return view('admin/fasilitas/tambah');
    }

    public function simpan()
    {
        $model = new fasilitasModel();

        // Validasi input
        $validation = $this->validate([
            'nama_fasilitas' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'uploaded[gambar]|is_image[gambar]' // Validasi untuk file gambar
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Upload file gambar
        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/foto/fasilitas', $namaGambar); // Pastikan folder 'public/img/kendaraan' ada
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah gambar');
        }

        // Simpan data ke database
        $data = [
            'nama_fasilitas' => $this->request->getPost('nama_fasilitas'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $namaGambar, // Nama file gambar
        ];

        $model->save($data);

        return redirect()->to('/admin/fasilitas')->with('success', 'Data fasilitas berhasil disimpan');
    }

    public function edit($id_fasilitas)
    {
        $fasilitas = $this->fasilitas->data_fasilitas($id_fasilitas);
        $data = [
            'title' => 'Edit Data Fasilitas',
            'fasilitas' => $fasilitas,
        ];

        return view('admin/fasilitas/edit', $data);
    }

    public function update($id_fasilitas)
    {
        $model = new fasilitasModel();

        // Validasi input
        $validation = $this->validate([
            'nama_fasilitas' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]', // Validasi untuk file gambar
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Upload file gambar jika ada
        $gambar = $this->request->getFile('gambar');
        $fasilitas = $model->find($id_fasilitas);
        $namaGambar = $fasilitas['gambar']; // Gambar lama

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Hapus gambar lama jika ada
            if ($namaGambar && file_exists(ROOTPATH . 'public/foto/fasilitas/' . $namaGambar)) {
                unlink(ROOTPATH . 'public/foto/fasilitas/' . $namaGambar);
            }

            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/foto/fasilitas', $namaGambar);
        }

        // Update data ke database
        $data = [
            'nama_fasilitas' => $this->request->getPost('nama_fasilitas'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $namaGambar, // Nama file gambar
        ];

        $model->update($id_fasilitas, $data);

        return redirect()->to('/admin/fasilitas')->with('success', 'Data kendaraan berhasil diupdate');
    }

    public function delete($id_fasilitas)
    {
        $fasilitas = $this->fasilitas->data_fasilitas($id_fasilitas);

        // nama file yang berada dikolom userfile
        $img = $fasilitas['gambar'];

        // proses penghapusan file menggunakan fungsi unlink
        unlink('../public/foto/fasilitas/' . $img);

        // penghapusan database
        $this->fasilitas->delete_data($id_fasilitas);

        // mengakses halaman berita
        return redirect()->to('admin/fasilitas');
    }
}
