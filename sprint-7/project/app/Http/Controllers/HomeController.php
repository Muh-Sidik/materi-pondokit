<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function page()
    {
        return view('port/portfolio');
    }
}
