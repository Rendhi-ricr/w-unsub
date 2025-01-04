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
            'prodi' => 'required',
            'link' => 'required|valid_url',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Simpan data
        $this->fakultas->save([
            'nama_fakultas' => $this->request->getPost('nama_fakultas'),
            'prodi' => $this->request->getPost('prodi'),
            'link' => $this->request->getPost('link'),
        ]);

        return redirect()->to('/fakultas/aindex')->with('success', 'Data berhasil disimpan!');
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
            'prodi' => 'required',
            'link' => 'required|valid_url',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Update data
        $this->fakultas->update($id_fakultas, [
            'nama_fakultas' => $this->request->getPost('nama_fakultas'),
            'prodi' => $this->request->getPost('prodi'),
            'link' => $this->request->getPost('link'),
        ]);

        return redirect()->to('/fakultas/aindex')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id_fakultas)
    {
        $fakultas = $this->fakultas->find($id_fakultas);

        $this->fakultas->delete($id_fakultas);
        return redirect()->to('/fakultas/aindex')->with('success', 'Data berhasil dihapus!');
    }
}
