<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function movil(){
        return view('movil');
    }

    public function fija(){
        return view('fija');
    }
    public function campana(){
        return view('campana');
    }
}
