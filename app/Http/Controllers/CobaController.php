<?php

namespace App\Http\Controllers;

use App\Models\Coba;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $pesan = Coba::all();
        return view('coba',['listPesan' => $pesan]);
    }

    public function store(Request $request){
        
            $contact = new Coba;
            $contact->nama = $request->nama;
            $contact->pesan = $request->pesan;
      
            $contact->save();
            return redirect()->back();
        
  }
    }

