<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;
use App\Models\VisitorCountModel;

class Dokumen extends BaseController
{
    protected $visitorCountModel;

    public function __construct()
    {
        $this->visitorCountModel = new VisitorCountModel();
    }

    public function index()
    {
        // $this->visitorCountModel->incrementVisit('beasiswa');
        return view('users/dokumen');
    }
}
