<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;

class Sambutan extends BaseController
{
    public function index()
    {
        return view('users/sambutan'); 
    }
}
