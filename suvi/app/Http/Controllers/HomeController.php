<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing()
    {
        return view('frontend.home.landing');
    }

    public function index()
    {
        return view('frontend.home.index');
    }
    public function search()
    {
        return view('frontend.home.search');
    }
}