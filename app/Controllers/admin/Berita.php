<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Berita extends BaseController
{
    public function index()
    {
        return view('admin/berita/index');
    }
}
