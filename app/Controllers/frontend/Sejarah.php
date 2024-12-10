<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Sejarah extends BaseController
{
    public function index()
    {
        return view('frontend/sejarah'); // Path relatif dari Views folder
    }
}
