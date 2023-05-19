<?php

use App\Http\Livewire\Result;
use App\Http\Livewire\Education;
use Illuminate\Support\Facades\Route;
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

Route::middleware(['auth', 'is_applicant'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/personal-information', PersonalInformation::class)->name('personal');
    Route::get('/guardian-information', GuardianInformation::class)->name('guardian');
    Route::get('/education', Education::class)->name('education');
    Route::get('/result', Result::class)->name('result');
});

require __DIR__.'/auth.php';
