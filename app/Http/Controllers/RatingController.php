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
    // Validasi data yang diterima dari permintaan
    { // dd($request->all());
        $data = $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
            'review' => 'required|string',
            'asset_id' => 'required' // Pastikan 'asset_id' disediakan dalam data yang dikirimkan
        ]);

        $data['user_id'] = auth()->id();

        // Simpan ulasan menggunakan model Rating
        Ratings::create($data);

        return redirect()->back()->with('success', 'Ulasan Anda telah berhasil disimpan.');
    }
}
