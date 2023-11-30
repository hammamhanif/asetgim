<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Asset;
use App\Models\Message;
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
        $statuses = Asset::select('status')->distinct()->pluck('status');
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

        $query->leftJoin('users', 'assets.user_id', '=', 'users.id');
        $assets = $query->paginate(5);

        return view('sections.tableasset', compact('assets', 'search', 'statuses'));
    }

    public function dashboard()
    {
        $user = Auth::user();
        $users = User::where('account_type', 'creator')->count();
        $assets = Asset::where('user_id', $user->id)->paginate(5);
        $assets2D = Asset::where('user_id', $user->id)->where('asset_type', '2D')->get();
        $assetCount2D = $assets2D->count();

        $assets3D = Asset::where('user_id', $user->id)->where('asset_type', '3D')->get();
        $assetCount3D = $assets3D->count();
        // Menghitung jumlah aset
        $assetCount =  Asset::count();
        $assetCountUser =  Asset::where('user_id', $user->id)->count();

        $messages = Message::Where('receiver_id', $user->id)
            ->paginate(5);

        return view('sections.dashboard', compact('user', 'assets', 'assetCount', 'assets2D', 'assetCount2D', 'assets3D', 'assetCount3D', 'users', 'messages', 'assetCountUser'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,png,jpg|max:4096',
            'file2' => 'required|mimes:zip,rar|max:5120',
            'asset_type' => 'required|string',
            'area' => 'required|string',
        ], [
            'asset_type.required' => 'Kolom Type harus diisi.',
            'area.required' => 'Kolom Area harus diisi.',
            'file2.required' => 'File 2 harus diunggah.',
            'file2.mimes' => 'File 2 harus berformat ZIP atau RAR.',
            'file2.max' => 'File 2 tidak boleh lebih dari 5 MB.',
        ]);

        $user = auth()->user(); // Mengambil pengguna yang sedang masuk

        $file = $request->file('file');
        $fileName = $user->id . '_' . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs('uploads', $fileName, 'public');

        $file2 = $request->file('file2');
        $fileName2 = $user->id . '_file2_' . time() . '.' . $file2->getClientOriginalExtension();
        $path2 = $file2->storeAs('uploads', $fileName2, 'public');


        Asset::create([
            'user_id' => $user->id,
            'name' => $request->input('name'),
            'path' => $path,
            'path2' => $path2,
            'asset_type' => $request->input('asset_type'),
            'area' => $request->input('area'),
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('success', 'File berhasil diunggah');
    }

    public function download_asset($id)
    {
        $asset = Asset::find($id);

        if (!$asset) {
            return redirect()->back()->with('error', 'Asset tidak ditemukan.');
        }

        $filePath = storage_path('app/public/' . $asset->path2);

        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }

        $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);

        $namaFile = $asset->name;

        $mimeTypes = [
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'pdf' => 'application/pdf',
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
        ];


        if (array_key_exists($fileExtension, $mimeTypes)) {

            header("Content-Type: " . $mimeTypes[$fileExtension]);
            // Update column count asset
            $asset->count++; // Menambahkan 1 ke column count asset
            $asset->save();  // Menyimpan perubahan ke database
            return response()->download($filePath, $namaFile . '.' . $fileExtension);
        } else {
            return redirect()->back()->with('error', 'Tipe file tidak didukung.');
        }
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
    public function edit(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'area' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf,png,jpg|max:4096',
            'file2' => 'nullable|mimes:zip,rar|max:5120',
        ];

        $messages = [
            'area.required' => 'Kolom area wajib diisi.',
            'description.required' => 'Kolom deskripsi wajib diisi.',
            'name.required' => 'Kolom nama wajib diisi.',
            'file.mimes' => 'File harus berupa PDF, PNG, atau JPG.',
            'file.max' => 'Ukuran file tidak boleh lebih dari 4 MB.',
            'file2.mimes' => 'File 2 harus berupa ZIP atau RAR.',
            'file2.max' => 'Ukuran File 2 tidak boleh lebih dari 5 MB.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Periksa apakah asset menjadi tidak aktif
        $asset = Asset::find($id);

        // Check if there is a file to update
        if ($request->hasFile('file')) {
            // Validate the new file
            $request->validate([
                'file' => 'required|mimes:pdf,png,jpg|max:4096',
            ]);

            // Delete the old file
            Storage::delete('public/' . $asset->path);

            // Store the new file
            $file = $request->file('file');
            $fileName = $asset->user_id . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('uploads', $fileName, 'public');

            // Update the asset with the new file path
            $asset->path = $path;
        }


        // Update other asset attributes
        $asset->name = $request->input('name');
        $asset->description = $request->input('description');
        $asset->area = $request->input('area');

        $asset->save();
        return redirect()->route('dashboard')->withSuccess('Asset berhasil diperbarui');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'status' => 'required|in:active,inactive,pending',
            'area' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf,png,jpg|max:4096',
            'file2' => 'nullable|mimes:zip,rar|max:5120',
        ];

        $messages = [
            'area.required' => 'Kolom area wajib diisi.',
            'description.required' => 'Kolom deskripsi wajib diisi.',
            'name.required' => 'Kolom nama wajib diisi.',
            'file.mimes' => 'File harus berupa PDF, PNG, atau JPG.',
            'file.max' => 'Ukuran file tidak boleh lebih dari 4 MB.',
            'file2.mimes' => 'File 2 harus berupa ZIP atau RAR.',
            'file2.max' => 'Ukuran File 2 tidak boleh lebih dari 5 MB.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Periksa apakah asset menjadi tidak aktif
        $asset = Asset::find($id);

        // Check if there is a file to update
        if ($request->hasFile('file')) {
            // Validate the new file
            $request->validate([
                'file' => 'required|mimes:pdf,png,jpg|max:4096',
            ]);

            // Delete the old file
            Storage::delete('public/' . $asset->path);

            // Store the new file
            $file = $request->file('file');
            $fileName = $asset->user_id . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('uploads', $fileName, 'public');

            // Update the asset with the new file path
            $asset->path = $path;
        }
        if ($request->hasFile('file2')) {
            // Validate the new file
            $request->validate([
                'file2' => 'required|mimes:zip,rar|max:5120',
            ]);

            // Delete the old file
            Storage::delete('public/' . $asset->path2);

            // Store the new file
            $file2 = $request->file('file2');
            $fileName = $asset->user_id . '_' . time() . '.' . $file2->getClientOriginalExtension();
            $path2 = $file2->storeAs('uploads', $fileName, 'public');

            // Update the asset with the new file path
            $asset->path2 = $path2;
        }


        // Update other asset attributes
        $asset->name = $request->input('name');
        $asset->description = $request->input('description');
        $asset->status = $request->input('status');
        $asset->area = $request->input('area');

        $asset->save();

        $statusChangedToInactive = $request->input('status') === 'inactive' && $asset->status !== 'inactive' && $asset->status !== 'pending';


        if ($statusChangedToInactive) {
            $senderId = auth()->user()->id;
            $receiverId = $asset->user_id;
            $subject = $asset->name;
            $messageText = "Mohon maaf, '{$asset->name}' tidak aktif dan akan kami tinjau ulang. Terima Kasih.";

            Message::create([
                'sender_id' => $senderId,
                'receiver_id' => $receiverId,
                'subject' => $subject,
                'message' => $messageText,
            ]);

            return redirect()->route('reviewasset')->withSuccess('Asset berhasil diperbarui dan pesan terkirim jika diperlukan.');
        } elseif ($request->input('status') === 'pending') {
            $senderId = auth()->user()->id;
            $receiverId = $asset->user_id;
            $subject = $asset->name;
            $messageText = "Asset '{$asset->name}' sedang kami tinjau terlebih dahulu sebelum diterbitkan!";

            Message::create([
                'sender_id' => $senderId,
                'receiver_id' => $receiverId,
                'subject' => $subject,
                'message' => $messageText,
            ]);

            return redirect()->route('reviewasset')->withSuccess('Asset berhasil diperbarui dan pesan terkirim.');
        } else {
            // Kirim pesan jika status berubah menjadi active
            $senderId = auth()->user()->id;
            $receiverId = $asset->user_id;
            $subject = $asset->name;
            $messageText = "Selamat, Asset Anda '{$asset->name}' sudah aktif dan dapat dilihat pada halaman utama.";

            Message::create([
                'sender_id' => $senderId,
                'receiver_id' => $receiverId,
                'subject' => $subject,
                'message' => $messageText,
            ]);

            return redirect()->route('reviewasset')->withSuccess('Asset berhasil diperbarui dan pesan terkirim.');
        }
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
    public function destroy_message($id)
    {
        $message = Message::find($id);

        if (!$message) {
            return redirect()->back()->with('error', 'Pesan tidak ditemukan.');
        }

        // Pastikan hanya pengirim atau penerima yang dapat menghapus pesan
        if ($message->sender_id == auth()->user()->id || $message->receiver_id == auth()->user()->id) {
            $message->delete();
            return redirect()->back()->with('success', 'Pesan berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus pesan ini.');
    }
}
