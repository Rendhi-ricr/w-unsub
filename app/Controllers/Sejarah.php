<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use App\Models\VisitorCountModel;


class Sejarah extends BaseController
{
    protected $visitorCountModel;

    public function __construct()
    {
        $this->visitorCountModel = new VisitorCountModel();
    }

    public function index()
    {
        $kunjungan = $this->visitorCountModel->kunjunganHariIni('sejarah');
        $data = [
            'kun' => $kunjungan
        ];
        return view('sejarah', $data);
    }
}
