<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersPerPage = 10;
        $totalUsers = User::count();
        $totalPages = ceil($totalUsers / $usersPerPage);
        $currentPage = request()->page ?? 10;

        $query = User::query()->latest();

        if (request()->filled('search')) {
            $search = request()->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('username', 'LIKE', '%' . $search . '%')
                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('type', 'LIKE', '%' . $search . '%');
            });
        }

        $users = $query->get();

        return view('sections.tableuser', compact('users',  'currentPage', 'totalPages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function profile()
    {
        $user = Auth::user();
        return view('sections.profile', compact('user'));
    }

    public function update_profile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:4096'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $allowedMimes = ['jpeg', 'png', 'jpg'];
            $validator = Validator::make($request->all(), [
                'image' => 'image|mimes:' . implode(',', $allowedMimes) . '|max:4096',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $name = md5(time() . $request->image->getClientOriginalName()) . '.' . $request->image->extension();;
            $request->image->move(public_path('uploads'), $name);
            $user->setAttribute('image', '/uploads/' . $name);
        }

        $user->save();

        return redirect()->route('profile')->withSuccess("Profile updated successfully.");
    }
    public function update(Request $request, $id)
    {
        $rules = [
            'type' => 'required',
        ];

        $messages = [
            'type.required' => 'The type field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($id);
        $user->status = $request->input('status');
        $user->type = $request->input('type');
        $user->save();

        return redirect()->route('tableuser')->withSuccess('Pengguna berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('tableuser')->withSuccess('Pengguna berhasil dihapus.');
    }
}
