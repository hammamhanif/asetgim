<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;

class pdf extends Controller {
    public function download(){
        $path=public_path('pdf/test.pdf');
        return response()->download($path);
    }
}
