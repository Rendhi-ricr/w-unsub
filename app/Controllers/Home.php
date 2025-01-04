<?php

namespace App\Controllers;

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
        return view('home', ['kun' => $kunjungan]);
    }

    public function statistik($lhalaman = null) // Berikan default null
    {
        if (!$lhalaman) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Page name is required',
            ]);
        }

        if ($this->request->isAJAX()) {
            $this->visitorCountModel->incrementVisit($lhalaman);
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Visit incremented for ' . $lhalaman,
            ]);
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Invalid request',
        ]);
    }

    public function aindex()
    {
        return view('VA_home');
    }
}
