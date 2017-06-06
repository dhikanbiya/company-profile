<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoonController extends Controller
{
    public function index(){
        return view('landing');
    }
}
