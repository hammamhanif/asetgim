<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
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

Route::controller(LandingController::class)->group(function () {

    Route::get('/', 'index')->name('home');
});


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

    Route::get('forgot', 'forgot')->name('forgot');
    Route::post('send-forgot-request', 'forgotRequest')->name('forgot.request');
    Route::get('reset-password/{token}', 'resetPassword')->name('password.reset');
    Route::post('reset-password-request', 'resetPasswordRequest')->name('password.request');
});

Route::get('dashboard', function () {
    return view('sections.dashboard');
})->middleware(['auth', 'verified', 'isActive'])->name('dashboard');

Route::get('changepass', function () {
    return view('sections.change-password');
})->middleware(['auth', 'verified', 'isActive'])->name('changepass');



Route::controller(UserController::class)->group(function () {

    Route::get('tableuser',  'index')->middleware('isAdmin')->name('tableuser');
    Route::put('tableuser/{id}/update',  'update')->middleware('isAdmin')->name('tableuser.update');
    Route::delete('tableuser/{id}/delete',  'destroy')->middleware('isAdmin')->name('tableuser.delete');
    Route::get('profile',  'profile')->name('profile');
    Route::put('profile/{id}/update',  'update_profile')->whereNumber('id')->name('profile.update');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/uploadAsset', [AssetController::class, 'index'])->name('uploadAsset');
    Route::post('/upload', [AssetController::class, 'upload'])->name('file.upload');
    Route::get('/download/{id}', [AssetController::class, 'download'])->name('file.download');


    Route::get('/review', [AssetController::class, 'view'])->name('reviewasset');
    Route::put('/review/{id}/update', [AssetController::class, 'update'])->name('reviewasset.update');
    Route::delete('/review/{id}/update', [AssetController::class, 'destroy'])->name('reviewasset.delete');
});


Route::get('exploreAsset', function () {
    return view('sections.sectionexplore');
})->name('exploreAsset');


Route::get('assetdetail', function () {
    return view('sections.detail-asset');
})->name('detailasset');


Route::get('about', function () {
    return view('sections.aboutUs');
})->name('about');

Route::get('details', function () {
    return view('sections.detailAsset');
})->name('details');

Route::get('rating', function () {
    return view('sections.rating');
})->name('rating');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('index_contact');
    Route::post('/contact', 'store')->name('kontaks');
});

Route::get('download', 'Pdf@download');
