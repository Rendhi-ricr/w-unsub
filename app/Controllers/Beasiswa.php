<?php

namespace App\Controllers;

use App\Models\beasiswaModel;

use App\Controllers\BaseController;
// use App\Models\VisitorCountModel;

class Beasiswa extends BaseController
{
    protected $beasiswa;

    public function __construct()
    {
        $this->beasiswa = new beasiswaModel();
    }

    public function index()
    {
        $beasiswa = $this->beasiswa->findAll();
        $data = [
            'beasiswa' => $beasiswa
        ];
        return view('beasiswa', $data);
    }
}
