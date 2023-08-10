<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('frontend.course.page');
    }

    public function detail()
    {
        return view('frontend.course.detail');
    }
}