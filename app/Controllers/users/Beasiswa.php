<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;

class Beasiswa extends BaseController
{
    public function index()
    {
        return view('users/beasiswa'); 
    }
}
