<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function care()
    {
        return  view('frontend.care');
    }
    public function form()
    {
        return  view('frontend.form');
    }
    public function contact()
    {
        return  view('frontend.contact');
    }
}
