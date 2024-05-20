<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedinfoController extends Controller
{
    public function index(){
        return view('medinfo');
    }
}
