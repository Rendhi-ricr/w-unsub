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
        // Validasi input
        $this->validate([
            'nama_ukm' => 'required',
            'deskripsi' => 'required',
            'kontak' => 'required',
            'gambar' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
        ]);

        $ukmModel = new UkmModel();
        $ukm = $ukmModel->find($id_ukm);

        if (!$ukm) {
            return redirect()->back()->with('error', 'Data UKM tidak ditemukan.');
        }

        // Cek apakah ada file baru diunggah
        $gambar = $this->request->getFile('gambar');
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Simpan file gambar baru
            $newName = $gambar->getRandomName();
            $gambar->move('foto/UKM', $newName);

            // Hapus file gambar lama jika ada
            if ($ukm['gambar'] && file_exists('foto/UKM/' . $ukm['gambar'])) {
                unlink('foto/UKM/' . $ukm['gambar']);
            }
        } else {
            // Gunakan gambar lama
            $newName = $ukm['gambar'];
        }

        // Update data ke database
        $ukmModel->update($id_ukm, [
            'nama_ukm' => $this->request->getPost('nama_ukm'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kontak' => $this->request->getPost('kontak'),
            'gambar' => $newName,
        ]);

        return redirect()->to(base_url('admin/ukm'))->with('success', 'Data UKM berhasil diperbarui.');
    }

    public function delete($id_ukm)
    {
        $ukm = $this->ukm->data_ukm($id_ukm);

        // nama file yang berada dikolom userfile
        $img = $ukm['gambar'];

        // proses penghapusan file menggunakan fungsi unlink
        unlink('../public/foto/UKM/' . $img);

        // penghapusan database
        $this->ukm->delete_data($id_ukm);

        // mengakses halaman berita
        return redirect()->to('admin/ukm');
    }
}
