<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenristekController extends Controller
{
    public function index(){
        return view('penristek');
    }
}
