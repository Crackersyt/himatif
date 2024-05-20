<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KwuController extends Controller
{
    public function index(){
        return view('kwu');
    }
}
