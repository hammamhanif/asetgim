<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use GuzzleHttp\Middleware;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Tamplate.landingpage.index');
})->name('home');


Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->middleware('guest')->name('login');
    Route::post('login', 'loginPost')->name('login.post');
    Route::post('logout', 'logout')->name('logout');
    Route::get('register', 'register')->middleware('guest')->name('register');
    Route::post('register', 'registerPost')->name('register.post');
    Route::get('sign-in-google', 'google')->middleware('guest')->name('user.login.google');
    Route::get('auth/google/callback', 'handleProviderCallback')->name('user.google.callback');

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/dashboard');
    })->middleware(['auth', 'signed'])->name('verification.verify');
});

Route::get('dashboard', function () {
    return view('sections.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('exploreAsset', function () {
    return view('sections.sectionexplore');
})->name('exploreAsset');

Route::get('assetdetail', function () {
    return view('sections.detail-asset');
})->name('detailasset');

Route::get('forgot', function () {
    return view('auth.forgot');
})->name('forgot');

Route::get('reset', function () {
    return view('auth.reset-password');
});

Route::get('about',function(){
    return view('sections.aboutUs');
})->name('about');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('index_contact');
    Route::post('/contact', 'store')->name('kontaks');
});
