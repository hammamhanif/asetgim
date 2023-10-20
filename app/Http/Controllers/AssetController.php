<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function view(Request $request)
    {
        $search = $request->input('search'); // Ambil nilai pencarian dari request
        $query = Asset::query();
        $query->select('assets.*', 'users.name as creator_name'); // Pilih kolom yang Anda butuhkan

        if ($search) {
            $query->where(function ($subquery) use ($search) {
                $subquery->where('assets.name', 'like', '%' . $search . '%')
                    ->orWhere('assets.status', 'like', '%' . $search . '%')
                    ->orWhere('assets.description', 'like', '%' . $search . '%')
                    ->orWhere('users.name', 'like', '%' . $search . '%');
            });
        }

        $query->leftJoin('users', 'assets.user_id', '=', 'users.id'); // Menggabungkan tabel User
        $assets = $query->paginate(5); // Ubah angka 5 sesuai dengan jumlah item per halaman

        return view('sections.tableasset', compact('assets', 'search'));
    }

    public function dashboard()
    {
        $user = Auth::user();
        $users = User::where('account_type', 'creator')->count();

        // Mengambil aset yang dimiliki oleh pengguna yang sedang masuk
        $assets = Asset::where('user_id', $user->id)->paginate(5);
        $assets2D = Asset::where('user_id', $user->id)->where('asset_type', '2D')->get();
        $assetCount2D = $assets2D->count();

        $assets3D = Asset::where('user_id', $user->id)->where('asset_type', '3D')->get();
        $assetCount3D = $assets3D->count();
        // Menghitung jumlah aset
        $assetCount =  Asset::count();

        return view('sections.dashboard', compact('user', 'assets', 'assetCount', 'assets2D', 'assetCount2D', 'assets3D', 'assetCount3D', 'users'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,png,jpg|max:4096',
            'asset_type' => 'required|string',
            'area' => 'required|string',
        ], [
            'asset_type.required' => 'Kolom Type harus diisi.',
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
            'asset_type' => $request->input('asset_type'),
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
    public function show()
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
    public function destroy_dashboard($id)
    {
        $assets = Asset::find($id);
        if ($assets) {
            Storage::disk('public')->delete($assets->path);
            $assets->delete();
            return redirect()->route('dashboard')->withSuccess('Aset berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan');
        }
    }
}
