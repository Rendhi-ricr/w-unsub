<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;
use App\Models\VisitorCountModel;

class Home extends BaseController
{
    protected $visitorCountModel;

    public function __construct()
    {
        $this->visitorCountModel = new VisitorCountModel();
    }

    public function index()
    {
        // $this->visitorCountModel->incrementVisit('home');
        $kunjungan = $this->visitorCountModel->kunjunganHariIni('home');
        return view('users/home', ['kun' => $kunjungan]);
    }

    public function statistik($lhalaman)
    {
        if ($this->request->isAJAX()) { // Pastikan hanya menerima permintaan AJAX
            $this->visitorCountModel->incrementVisit($lhalaman);

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Visit incremented for ' . $lhalaman
            ]);
        }
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Invalid request'
        ]);
    }
}
