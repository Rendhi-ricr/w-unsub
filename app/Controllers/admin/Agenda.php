<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\agendaModel;

class Agenda extends BaseController
{
    protected $agenda;

    public function __construct()
    {
        $this->agenda = new agendaModel();
    }

    public function index()
    {
        $agenda = $this->agenda->findAll();
        $data = [
            'agenda' => $agenda
        ];
        return view('admin/agenda/index', $data);
    }

    public function tambah()
    {
        return view('admin/agenda/tambah');
    }

    public function simpan()
    {
        $model = new agendaModel();

        // Validasi input
        $validation = $this->validate([
            'nama_acara' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'penyelenggara' => 'required',
            'gambar' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]', // Validasi untuk file gambar
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Upload file gambar
        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/foto/agenda', $namaGambar); // Pastikan folder 'public/img/kendaraan' ada
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah gambar');
        }

        // Simpan data ke database
        $data = [
            'nama_acara' => $this->request->getPost('nama_acara'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'tempat' => $this->request->getPost('tempat'),
            'penyelenggara' => $this->request->getPost('penyelenggara'),
            'tanggal_buat' => date('Y-m-d'),
            'banner' => $namaGambar, // Nama file gambar
        ];

        $model->save($data);

        return redirect()->to('/admin/agenda')->with('success', 'Data Berita berhasil disimpan');
    }

    public function edit($id)
    {
        $agenda = $this->agenda->find($id);

        if (!$agenda) {
            return redirect()->to('/admin/agenda')->with('error', 'Data tidak ditemukan.');
        }

        $data = [
            'agenda' => $agenda
        ];

        return view('admin/agenda/edit', $data);
    }

    public function update($id_agenda)
    {
        // Validasi input
        $validation = $this->validate([
            'nama_acara' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'penyelenggara' => 'required',
            'gambar' => 'is_image[gambar]|max_size[gambar,2048]', // Validasi opsional untuk file gambar
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Cek jika ada file gambar baru yang diunggah
        $gambar = $this->request->getFile('gambar');
        $agenda = $this->agenda->find($id_agenda);

        if (!$agenda) {
            return redirect()->to('/admin/agenda')->with('error', 'Data tidak ditemukan.');
        }

        $namaGambar = $agenda['banner']; // Default gunakan gambar lama
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Hapus gambar lama jika ada
            if (file_exists(ROOTPATH . 'public/foto/agenda/' . $agenda['banner'])) {
                unlink(ROOTPATH . 'public/foto/agenda/' . $agenda['banner']);
            }

            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/foto/agenda', $namaGambar);
        }

        // Update data ke database
        $data = [
            'nama_acara' => $this->request->getPost('nama_acara'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'tempat' => $this->request->getPost('tempat'),
            'penyelenggara' => $this->request->getPost('penyelenggara'),
            'banner' => $namaGambar, // Nama file gambar (baru atau lama)
        ];

        $this->agenda->update($id_agenda, $data);

        return redirect()->to('/admin/agenda')->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id_agenda)
    {
        $agenda = $this->agenda->find($id_agenda);

        if (!$agenda) {
            return redirect()->to('/admin/agenda')->with('error', 'Data tidak ditemukan.');
        }

        // Hapus gambar terkait jika ada
        if (file_exists(ROOTPATH . 'public/foto/agenda/' . $agenda['banner'])) {
            unlink(ROOTPATH . 'public/foto/agenda/' . $agenda['banner']);
        }

        // Hapus data dari database
        $this->agenda->delete($id_agenda);

        return redirect()->to('/admin/agenda')->with('success', 'Data berhasil dihapus.');
    }
}
