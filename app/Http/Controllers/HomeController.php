<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['list'] = ['asd'];
        return view('welcome', $data);
    }
}
