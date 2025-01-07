<?php

namespace App\Controllers;

use App\Models\VisitorCountModel;

// use App\Controllers\BaseController;

class Visimisi extends BaseController
{
    protected $visitorCountModel;

    public function __construct()
    {
        $this->visitorCountModel = new VisitorCountModel();
    }

    public function index()
    {
        $kunjungan = $this->visitorCountModel->kunjunganHariIni('visimisi');
        $data = [
            'kun' => $kunjungan
        ];
        return view('visimisi', $data);
    }
}
