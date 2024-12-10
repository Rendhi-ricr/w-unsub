<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Visi_misi extends BaseController
{
    public function index()
    {
        return view('frontend/visi_misi'); // Path relatif dari Views folder
    }
}
