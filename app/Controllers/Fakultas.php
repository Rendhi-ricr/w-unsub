<?php

namespace App\Controllers;

use App\Models\fakultasModels;

// use App\Controllers\BaseController;

class Fakultas extends BaseController
{
    protected $fakultas;

    public function __construct()
    {
        $this->fakultas = new fakultasModels();
    }

    public function index()
    {
        $fakultas = $this->fakultas->findAll();
        $data = [
            'fakultas' => $fakultas
        ];
        return view('fakultas', $data);
    }

    public function aindex()
    {
        $data = [
            'fakultas' => $this->fakultas->findAll()
        ];
        return view('VA_fakultas', $data);
    }

    public function tambah()
    {
        return view('t_fakultas');
    }

    public function simpan()
    {
        // Validasi input
        if (!$this->validate([
            'nama_fakultas' => 'required',
            'gambar' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
            'link' => 'required|valid_url',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/foto/fakultas', $namaGambar); // Pastikan folder 'public/foto/fakultas' ada
        } else {
            return redirect()->back()->withInput()->with('errors', ['Gagal mengunggah gambar']);
        }

        // Simpan data
        $this->fakultas->save([
            'nama_fakultas' => $this->request->getPost('nama_fakultas'),
            'logo' => $namaGambar,
            'link' => $this->request->getPost('link'),
        ]);

        return redirect()->to('/fakultas/aindex')->with('success', 'Fakultas berhasil ditambahkan');
    }


    public function edit($id_fakultas)
    {
        $fakultas = $this->fakultas->find($id_fakultas);

        $data = [
            'fakultas' => $fakultas
        ];

        return view('e_fakultas', $data);
    }

    public function update($id_fakultas)
    {
        // Validasi input
        if (!$this->validate([
            'nama_fakultas' => 'required',
            'link' => 'required|valid_url',
            'gambar' => 'if_exist|mime_in[gambar,image/jpg,image/jpeg,image/png]|max_size[gambar,2048]',
        ])) if (!$this->validate([
            'nama_fakultas' => 'required',
            'gambar' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
            'link' => 'required|valid_url',
        ]));
        $models = new fakultasModels();
        $fakultas = $models->find($id_fakultas);

        if (!$fakultas) {
            return redirect()->back()->with('error', 'Data Fakultas tidak ditemukan.');
        }

        $gambar = $this->request->getFile('gambar');
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Simpan file gambar baru
            $newName = $gambar->getRandomName();
            $gambar->move('foto/fakultas', $newName);

            // Hapus file gambar lama jika ada
            if ($fakultas['logo'] && file_exists('foto/fakultas/' . $fakultas['logo'])) {
                unlink('foto/fakultas/' . $fakultas['logo']);
            }
        } else {
            // Gunakan gambar lama
            $newName = $fakultas['logo'];
        }

        // Update data
        $this->fakultas->update($id_fakultas, [
            'nama_fakultas' => $this->request->getPost('nama_fakultas'),
            'logo' => $newName,
            'link' => $this->request->getPost('link'),
        ]);

        return redirect()->to('/fakultas/aindex')->with('success', 'Fakultas berhasil diperbarui');
    }



    public function delete($id_fakultas)
    {
        $fakultas = $this->fakultas->find($id_fakultas);

        $this->fakultas->delete($id_fakultas);
        return redirect()->to('/fakultas/aindex')->with('success', 'Fakultas berhasil dihapus');
    }
}
