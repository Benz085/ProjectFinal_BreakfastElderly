<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' =>['index','show']]);
    }
    public function index()
    {
        return view('backend.twitter.index');
    }
    public function show()
    {
        return view('backend.twitter.show');
    }
}
