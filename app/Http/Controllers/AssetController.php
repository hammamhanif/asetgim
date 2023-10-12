<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;
use Illuminate\Support\Facades\Validator;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sections.uploadAsset');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view()
    {
        $assets = Asset::all();
        return view('sections.tableasset', compact('assets'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,png,jpg|max:4096',
            'type' => 'required|string',
            'area' => 'required|string',
        ], [
            'type.required' => 'Kolom Type harus diisi.',
            'area.required' => 'Kolom Area harus diisi.',
        ]);

        $user = auth()->user(); // Mengambil pengguna yang sedang masuk

        $file = $request->file('file');
        $fileName = $user->id . '_' . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs('uploads', $fileName, 'public');

        Asset::create([
            'user_id' => $user->id,
            'name' => $request->input('name'),
            'path' => $path,
            'type' => $request->input('type'),
            'area' => $request->input('area'),
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('success', 'File berhasil diunggah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'status' => 'required',
            'area' => 'required',
            'description' => 'required',
        ];

        $messages = [
            'area.required' => 'The area field is required.',
            'status.required' => 'The status field is required.',
            'description.required' => 'The description field is required.',
            'name.required' => 'The name field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $assets = Asset::find($id);
        $assets->name = $request->input('name');
        $assets->description = $request->input('description');
        $assets->status = $request->input('status');
        $assets->area = $request->input('area');
        $assets->save();

        return redirect()->route('reviewasset')->withSuccess('Pengguna berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $assets = Asset::find($id);
        if ($assets) {
            Storage::disk('public')->delete($assets->path);
            $assets->delete();
            return redirect()->route('reviewasset')->withSuccess('Aset berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan');
        }
    }
}
