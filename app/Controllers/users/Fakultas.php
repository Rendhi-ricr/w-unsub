<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;

class Fakultas extends BaseController
{
    public function index()
    {
        return view('users/fakultas'); 
    }
}
