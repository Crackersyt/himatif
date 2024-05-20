<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MibaController extends Controller
{
    public function index(){
        return view('miba');
    }
}
