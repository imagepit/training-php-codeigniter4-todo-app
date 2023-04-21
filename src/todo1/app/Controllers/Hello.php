<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Hello extends BaseController
{
    public function index()
    {
        $data = ['message' => 'Hello World'];
        return view('hello', $data);
    }
}
