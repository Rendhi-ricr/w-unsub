<?php

namespace App\Controllers\users;
use App\Models\ukmModel;

use App\Controllers\BaseController;
// use App\Models\VisitorCountModel;

class Ukm extends BaseController
{
    protected $ukm;

    public function __construct()
    {
        $this->ukm = new ukmModel();
    }

    public function index()
    {
        $ukm = $this->ukm->findAll();
        $data = [
            'ukm' => $ukm
        ];
        return view('users/ukm', $data);
    }
}
