<?php

namespace App\Http\Controllers;

use App\Models\AssetReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = AssetReport::query();

        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('asset_name', 'like', '%' . $keyword . '%')
                    ->orWhere('creator_name', 'like', '%' . $keyword . '%');
            });
        }

        $reports = $query->paginate(5);

        return view('sections.tablereport', compact('reports', 'keyword'));
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
    public function show(AssetReport $assetReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssetReport $assetReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssetReport $assetReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $report = AssetReport::find($id);
        $report->delete();
        return redirect()->route('tablereport')->withSuccess('Report berhasil dihapus.');
    }
}
