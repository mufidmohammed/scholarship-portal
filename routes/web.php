<?php

use App\Http\Livewire\Detail;
use App\Http\Livewire\Result;
use App\Http\Livewire\Upload;
use App\Http\Livewire\Summary;
use App\Http\Livewire\Education;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Livewire\GuardianInformation;
use App\Http\Livewire\PersonalInformation;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'is_applicant'])->group(function () {
    Route::get('/personal-information', PersonalInformation::class)->name('personal');
    Route::get('/guardian-information', GuardianInformation::class)->name('guardian');
    Route::get('/education', Education::class)->name('education');
    Route::get('/result', Result::class)->name('result');
    Route::get('/uploads', Upload::class)->name('upload');
    Route::get('/summary', Summary::class)->name('summary');
});

Route::middleware(['auth', 'is_reviewer'])->group(function () {
    Route::get('/review-applicants', [ReviewController::class, 'index'])->name('review.applicants');
    Route::get('/review-applicant/{id}', [ReviewController::class, 'show'])->name('review.detail');
    Route::put('/review-grant/{id}', [ReviewController::class, 'grant'])->name('review.grant');
    Route::put('/review-dismiss/{id}', [ReviewController::class, 'dismiss'])->name('review.dismiss');

    Route::get('/review-granted', function() {
        return view('review.granted');
    })->name('review.granted');

    Route::get('/review-dismissed', function() {
        return view('review.dismissed');
    })->name('review.dismissed');

});

require __DIR__.'/auth.php';
