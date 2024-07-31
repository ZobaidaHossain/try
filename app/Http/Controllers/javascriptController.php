<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class javascriptController extends Controller
{
    public function index(){
        return view('frontend.javascript');
    }
}
