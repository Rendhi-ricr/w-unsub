<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Kerjasama extends BaseController
{
    public function index()
    {
        return view('admin/kerjasama/index');
    }
}
