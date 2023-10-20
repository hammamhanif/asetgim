<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Asset;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users =  User::where('account_type', 'creator')->get();
        $assets = Asset::orderBy('updated_at')->take(8)->get();
        return view('Tamplate.landingpage.index', compact('users', 'assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    public function exploreAsset(Request $request)
    {

        $searchQuery = $request->input('search'); // Mengambil kata kunci pencarian dari inputan form

        // Melakukan pencarian aset berdasarkan kata kunci dan menggabungkan data user pembuat
        $assets = Asset::join('users', 'assets.user_id', '=', 'users.id')
            ->where(function ($query) use ($searchQuery) {
                $query->where('assets.name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('assets.description', 'like', '%' . $searchQuery . '%')
                    ->orWhere('assets.asset_type', 'like', '%' . $searchQuery . '%')
                    ->orWhere('users.name', 'like', '%' . $searchQuery . '%'); // Cari juga berdasarkan nama creator
            })
            ->orderBy('assets.updated_at')
            ->select('assets.*', 'users.name as creator_name') // Memilih kolom yang diperlukan
            ->paginate(8);

        return view('sections.sectionexplore', compact('assets'));
    }
    public function detailAsset($id,)
    {
        $assets = Asset::where('id', $id)->first();
        if (!$assets) {
            return abort(404);
        }
        return view('sections.detailAsset', compact('assets',));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
