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
        ]);

    // Dapatkan ID aset berdasarkan beberapa kriteria, misalnya, nama aset
    // $assetName = $request->input('asset_name'); // Ganti dengan kriteria yang sesuai
    // $assets = Asset::where('name', $assetName)->first();

    // Pastikan aset ditemukan sebelum melanjutkan
    // if ($assets) {
    //     $data['asset_id'] = $assets->id;
    // } else {
    //     return redirect()->back()->with('error', 'Aset tidak ditemukan.');
    // }

    // Set user_id ke ID pengguna yang sedang login
    $data['user_id'] = auth()->id();

    // Simpan ulasan
    Ratings::create($data);
        $data['user_id'] = auth()->id(); // Mengambil ID pengguna yang sedang login

        Ratings::create($data); // Pastikan model Review sudah diimpor

    return redirect()->back()->with('success', 'Ulasan Anda telah berhasil disimpan.');
    
}

    
}
