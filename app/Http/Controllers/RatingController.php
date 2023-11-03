<?php

namespace App\Http\Controllers;

use App\Models\Ratings; // Pastikan Anda menggunakan model Rating tanpa alias
use Illuminate\Http\Request;
use App\Models\Asset;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{

    public function store(Request $request)
{
    // dd($request->all());
    $data = $request->validate([
        'rating' => 'required|numeric|min:1|max:5',
        'review' => 'required|string',
    ]);

    $data['user_id'] = auth()->id(); // Mengambil ID pengguna yang sedang login

    Ratings::create($data); // Pastikan model Review sudah diimpor

    return redirect()->back()->with('success', 'Ulasan Anda telah berhasil disimpan.');
    
}

    
}
