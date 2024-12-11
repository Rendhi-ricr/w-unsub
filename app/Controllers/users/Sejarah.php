<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;

class Sejarah extends BaseController
{
    public function index()
    {
        return view('users/sejarah'); 
    }
}
