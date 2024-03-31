<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AddProfileImageController;

// CRUD処理の一括指定なのでresourceを使う
// 以下でログインしているユーザーのみ使えるようにする
Route::middleware('auth')->group(function () {
    Route::get('/UserProfile/search/input', [SearchController::class, 'create'])->name('search.input');
    Route::get('/UserProfile/search/result', [SearchController::class, 'index'])->name('search.result');
    Route::get('/UserProfile/mypage', [UserProfileController::class, 'mydata'])->name('UserProfile.mypage');
    Route::resource('UserProfile', UserProfileController::class);


    // Route::get('/terms/TermsConditions', [UserProfileController::class, 'TermsConditions'])->name('terms.TermsConditions');
    // Route::get('/PrivacyPolicy', [TermsController::class, 'privacyPolicy']);
    // Route::get('/OurTeam', [TermsController::class, 'aboutUs']);



});

// Docker環境でterms表示
// Route::get('/terms/TermsConditions', function () {
//     return view('TermsConditions');
// });
// Route::get('/terms/PrivacyPolicy', function () {
//     return view('PrivacyPolicy');
// });
// Route::get('/terms/OurTeam', function () {
//     return view('OurTeam');
// });



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
