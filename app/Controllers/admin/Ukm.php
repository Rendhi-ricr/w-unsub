<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Ukm extends BaseController
{
    public function index()
    {
        return view('admin/ukm/index');
    }
}
