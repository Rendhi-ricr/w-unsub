<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use App\Models\VisitorCountModel;

class Sambutan extends BaseController
{
    protected $visitorCountModel;

    public function __construct()
    {
        $this->visitorCountModel = new VisitorCountModel();
    }

    public function index()
    {
        $kunjungan = $this->visitorCountModel->kunjunganHariIni('sambutan');
        $data = [
            'kun' => $kunjungan
        ];
        return view('sambutan', $data);
    }
}
