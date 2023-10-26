<?php

namespace App\Http\Controllers;

use App\Models\Rating; // Pastikan Anda menggunakan model Rating tanpa alias
use Illuminate\Http\Request;
use App\Models\Asset;

class RatingController extends Controller
{

    public function index($id)
{
    $assets = Asset::find($id);

    if (!$assets) {
        return abort(404); // Tampilkan halaman 404 jika ID tidak ditemukan.
    }

    return view('sections.rating', compact('assets'));
}



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


