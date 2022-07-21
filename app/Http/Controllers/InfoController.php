<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        return view('main-page');
    }

    public function about()
    {
        return view('about');
    }
}
