<?php

namespace App\Controllers\Application;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = ['titulo' => 'Dashboard'];
        return view('application/Home/index', $data);
    }
}
