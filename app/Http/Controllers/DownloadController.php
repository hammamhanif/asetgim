<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DownloadController extends Controller {
public function download()
{
    $filePath = storage_path("uploads/test.pdf");

    if (Storage::exists($filePath)) {
        return response()->file($filePath);
    }

    abort(404);
}
}