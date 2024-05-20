<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdsmoController extends Controller
{
    public function index(){
        return view('pdsmo');
    }
}
