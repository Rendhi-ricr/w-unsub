<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;

class Visi_misi extends BaseController
{
    public function index()
    {
        return view('users/visi_misi'); // Path relatif dari Views folder
    }
}
