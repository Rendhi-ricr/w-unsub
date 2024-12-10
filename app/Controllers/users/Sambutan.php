<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('users/sambutan'); 
    }
}
