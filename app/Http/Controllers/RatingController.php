<?php

namespace App\Http\Controllers;

use App\Models\Rating; // Pastikan Anda menggunakan model Rating tanpa alias
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'review_text' => 'required',
            'customer_name' => 'required', // Tambahkan validasi untuk customer_name jika Anda ingin memvalidasinya
        ]);
    
        Rating::create($validatedData);
    
        return redirect('/rating')->with('success', 'Ulasan berhasil disimpan.');
    }
}


