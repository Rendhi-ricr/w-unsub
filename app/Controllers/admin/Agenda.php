<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Agenda extends BaseController
{
    public function index()
    {
        return view('admin/agenda/index');
    }
}
