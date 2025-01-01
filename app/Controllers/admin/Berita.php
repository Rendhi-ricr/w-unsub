<?php

namespace App\Controllers\admin;

use App\Models\ukmModel;

use App\Controllers\BaseController;
use App\Models\beritaModel;

class Berita extends BaseController
{
    protected $berita;

    public function __construct()
    {
        $this->berita = new beritaModel();
    }

    public function index()
    {
        $berita = $this->berita->findAll();
        $data = [
            'berita' => $berita
        ];
        return view('admin/berita/index', $data);
    }

    public function tambah()
    {
        return view('admin/berita/tambah');
    }

    public function simpan()
    {
        $model = new beritaModel();

        // Validasi input
        $validation = $this->validate([
            'judul_berita' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]', // Validasi untuk file gambar
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Upload file gambar
        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/foto/berita', $namaGambar); // Pastikan folder 'public/img/kendaraan' ada
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah gambar');
        }

        // Simpan data ke database
        $data = [
            'judul_berita' => $this->request->getPost('judul_berita'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal' => date('Y-m-d'),
            'gambar' => $namaGambar, // Nama file gambar
        ];

        $model->save($data);

        return redirect()->to('/admin/berita')->with('success', 'Data Berita berhasil disimpan');
    }

    public function edit($id_berita)
    {
        $berita = $this->berita->data_berita($id_berita);
        $data = [
            'title' => 'Edit Data Berita',
            'berita' => $berita,
        ];
        return view('admin/berita/edit', $data);
    }

    public function update($id_berita)
    {
        $model = new beritaModel();

        // Validasi input
        $validation = $this->validate([
            'judul_berita' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]', // Validasi untuk file gambar
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Upload file gambar jika ada
        $gambar = $this->request->getFile('gambar');
        $berita = $model->find($id_berita);
        $namaGambar = $berita['gambar']; // Gambar lama

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Hapus gambar lama jika ada
            if ($namaGambar && file_exists(ROOTPATH . 'public/foto/berita/' . $namaGambar)) {
                unlink(ROOTPATH . 'public/foto/berita/' . $namaGambar);
            }

            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/foto/berita', $namaGambar);
        }

        // Update data ke database
        $data = [
            'judul_berita' => $this->request->getPost('judul_berita'),
            'deskripsi' => $this->request->getPost('deskripsi'), #
            'tanggal' => date('Y-m-d'),
            'gambar' => $namaGambar, // Nama file gambar
        ];

        $model->update_data($data, $id_berita);

        return redirect()->to('/admin/berita')->with('success', 'Data Berita berhasil diupdate');
    }
}
