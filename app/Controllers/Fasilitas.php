<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use App\Models\VisitorCountModel;

class Fasilitas extends BaseController
{
    protected $visitorCountModel;
    public function __construct()
    {
        $this->visitorCountModel = new VisitorCountModel();
    }

    public function index()
    {
        $kunjungan = $this->visitorCountModel->kunjunganHariIni('fasilitas');
        $data = [
            'kun' => $kunjungan
        ];
        return view('fasilitas', $data);
    }
}
