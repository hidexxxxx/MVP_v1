<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AddProfileImageController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\TermsConditionsController;
use App\Http\Controllers\PrivacyPolicyController;

// CRUD処理の一括指定なのでresourceを使う
// 以下でログインしているユーザーのみ使えるようにする
Route::middleware('auth')->group(function () {
    Route::get('/UserProfile/search/input', [SearchController::class, 'create'])->name('search.input');
    Route::get('/UserProfile/search/result', [SearchController::class, 'index'])->name('search.result');
    Route::get('/UserProfile/mypage', [UserProfileController::class, 'mydata'])->name('UserProfile.mypage');
    Route::resource('UserProfile', UserProfileController::class);

// Docker環境下
    Route::get('/UserProfile/terms/TermsConditions', [TermsConditionsController::class, 'index'])->name('terms.TermsConditions');
    Route::get('/UserProfile/terms/PrivacyPolicy', [PrivacyPolicyController::class, 'index'])->name('terms.PrivacyPolicy');
    Route::get('/UserProfile/terms/OurTeam', [OurTeamController::class, 'index'])->name('terms.OurTeam');

    // Route::get('/Terms/OurTeam', [TermsController::class, 'index']);
});


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
