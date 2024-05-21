<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use Illuminate\Http\Request;

class DeskripsiController extends Controller
{
    public function index()
    {
        
        return view('deskripsi');
    }

    // public function show() {
    //     $deskripsi = Deskripsi::all();
    //     return view('home', ['deskripsi' => $deskripsi])
    // }

    public function show() {
        // $deskripsi = Deskripsi::all();
        return view('home', ['deskripsi' => Deskripsi::all()]);
    }

    public function store(Request $request){
        
            // $deskripsi = new Deskripsi;
            // $deskripsi->deskripsi = $request->deskripsi;
         
      
            // $deskripsi->save(); 
            // return redirect()->back();
            
             // Validasi input
        $request->validate([
            'deskripsi' => 'required|string',
        ]);

        // Hapus semua deskripsi yang ada
        Deskripsi::truncate();

        // Buat deskripsi baru
        Deskripsi::create([
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->back()->with('success', 'Berhasil memperbarui deskripsi.');
        
  }
}
