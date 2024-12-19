<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Beasiswa extends BaseController
{
    public function index()
    {
        return view('admin/beasiswa/index');
    }
}
