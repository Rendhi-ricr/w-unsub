<?php

namespace App\Controllers\admin;

use App\Models\ukmModel;

use App\Controllers\BaseController;

class Ukm extends BaseController
{
    protected $ukm;

    public function __construct()
    {
        $this->ukm = new ukmModel();
    }

    public function index()
    {
        $ukm = $this->ukm->findAll();
        $data = [
            'ukm' => $ukm
        ];
        return view('admin/ukm/index', $data);
    }

    public function tambah()
    {
        return view('admin/ukm/tambah');
    }

    public function simpan()
    {
        $model = new ukmModel();

        // Validasi input
        $validation = $this->validate([
            'nama_ukm' => 'required',
            'deskripsi' => 'required',
            'kontak' => 'required',
            'gambar' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]', // Validasi untuk file gambar
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Upload file gambar
        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/foto/UKM', $namaGambar); // Pastikan folder 'public/img/kendaraan' ada
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah gambar');
        }

        // Simpan data ke database
        $data = [
            'nama_ukm' => $this->request->getPost('nama_ukm'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $namaGambar, // Nama file gambar
            'kontak' => $this->request->getPost('kontak'),
        ];

        $model->save($data);

        return redirect()->to('/admin/ukm')->with('success', 'Data Unit Kegiatan Mahasiswa berhasil disimpan');
    }

    public function edit($id_ukm)
    {
        $ukm = $this->ukm->data_ukm($id_ukm);
        $data = [
            'title' => 'Edit Data UKM',
            'u' => $ukm,
        ];

        return view('admin/ukm/edit', $data);
    }

    public function update($id_ukm)
    {
        $model = new ukmModel();

        // Validasi input
        $validation = $this->validate([
            'nama_ukm' => 'required',
            'deskripsi' => 'required',
            'kontak' => 'required',
            'gambar' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]', // Validasi untuk file gambar
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Upload file gambar jika ada
        $gambar = $this->request->getFile('gambar');
        $ukm = $model->find($id_ukm);
        $namaGambar = $ukm['gambar']; // Gambar lama

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Hapus gambar lama jika ada
            if ($namaGambar && file_exists(ROOTPATH . 'public/foto/UKM/' . $namaGambar)) {
                unlink(ROOTPATH . 'public/foto/UKM/' . $namaGambar);
            }

            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/foto/UKM', $namaGambar);
        }

        // Update data ke database
        $data = [
            'nama_ukm' => $this->request->getPost('nama_ukm'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $namaGambar, // Nama file gambar
            'kontak' => $this->request->getPost('kontak'),
        ];

        $model->update($id_ukm, $data);

        return redirect()->to('/admin/ukm')->with('success', 'Data kendaraan berhasil diupdate');
    }
}
