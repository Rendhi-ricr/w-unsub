<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;
use App\Models\VisitorCountModel;

class Ukm extends BaseController
{
    protected $visitorCountModel;

    public function __construct()
    {
        $this->visitorCountModel = new VisitorCountModel();
    }


    public function index()
    {
        // $this->visitorCountModel->incrementVisit('ukm');
        return view('users/ukm');
    }
}
