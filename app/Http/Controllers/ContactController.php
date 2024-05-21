<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Deskripsi;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ContactController extends Controller
{
    public function index(){
        // $contacts = Contact::all();
        return view('home', ['deskripsi' => Deskripsi::all()]);
    }

   

   


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);
    
        // Proses penyimpanan data
        Contact::create($request->all());
    
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }

}
