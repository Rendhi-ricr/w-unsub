<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;

class Fasilitas extends BaseController
{
    public function index()
    {
        return view('users/fasilitas'); 
    }
}
