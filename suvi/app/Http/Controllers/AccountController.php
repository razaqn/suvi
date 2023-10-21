<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('frontend.account.profile');
    }

    public function cart()
    {
        return view('frontend.account.cart');
    }
}