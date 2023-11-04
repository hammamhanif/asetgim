<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Models\Rating;
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
    Route::get('exploreAsset', 'exploreAsset')->name('exploreAsset');
    Route::get('/exploreAsset-{id}', 'detailAsset')->name('detailAsset');
    Route::post('/report', 'store')->name('report')->middleware('auth');
    Route::get('/detailAsset-{id}', 'rating')->name('rating');
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
    //Route::get('/download/{id}', [AssetController::class, 'download'])->name('file.download');


    Route::get('/dashboard', [AssetController::class, 'dashboard'])->name('dashboard');

    Route::get('/review', [AssetController::class, 'view'])->name('reviewasset');
    Route::put('/review/{id}/update', [AssetController::class, 'update'])->name('reviewasset.update');
    Route::delete('/review/{id}/delete', [AssetController::class, 'destroy'])->name('reviewasset.delete');
    Route::delete('/assets/{id}/delete', [AssetController::class, 'destroy_dashboard'])->name('reviewasset.delete2');

    Route::delete('/message/{id}/delete',  [AssetController::class, 'destroy_message'])->name('message.delete');
});

Route::get('/download/{id}', [AssetController::class, 'download_asset'])->name('file.download');





Route::get('about', function () {
    return view('sections.aboutUs');
})->name('about');



Route::controller(ContactController::class)->group(function () {

    // Manage Contact
    Route::get('/contacts', 'message')->name('contact.index');
    Route::delete('/contacts/{id}', 'destroy')->name('contact.destroy');


    Route::get('/contact', 'index')->name('index_contact');
    Route::post('/contact', 'store')->name('kontaks');
});

Route::get('/downloadAsset/{id}', [AssetController::class, 'download_asset'])->name('downloadAsset');

Route::post('/submit-review', [RatingController::class, 'store'])->name('submit-review');

// Route::post('/add-rating', [RatingController::class, 'store'])->name('add-rating');

// Route::match(['GET','POST'],'/add-rating', [RatingController::class, 'addRating']);
// // Route::post('/add-rating', 'RatingController@store')->name('add-rating');

Route::post('/Rating', [RatingController::class, 'store'])->name('Rating');
