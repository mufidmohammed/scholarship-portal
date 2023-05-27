<?php

use App\Models\User;
use App\Http\Livewire\Detail;
use App\Http\Livewire\Result;
use App\Http\Livewire\Upload;
use App\Http\Livewire\Summary;
use App\Http\Livewire\Education;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect()->route('login');
});;

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        if (auth()->user()->type == 'reviewer') {
            return redirect()->route('review.applicants');
        }
        else if (auth()->user()->type == 'applicant') {
            return redirect()->route('personal');
        } else {
            return to_route('admin.index');
        }
    })->name('dashboard');

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

Route::middleware(['auth', 'is_reviewer'])->prefix('review')->group(function () {
    Route::get('applicants', [ReviewController::class, 'index'])->name('review.applicants');
    Route::get('applicant/{id}', [ReviewController::class, 'show'])->name('review.detail');
    Route::put('grant/{id}', [ReviewController::class, 'grant'])->name('review.grant');
    Route::put('dismiss/{id}', [ReviewController::class, 'dismiss'])->name('review.dismiss');

    Route::get('granted', function() {
        $granted = User::where('status', 'granted')->get();
        return view('review.granted', compact('granted'));
    })->name('review.granted');

    Route::get('dismissed', function() {
        $dismissed = User::where('status', 'dismissed')->get();
        return view('review.dismissed', compact('dismissed'));
    })->name('review.dismissed');

});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('admin', AdminController::class)->except('show');
});

require __DIR__.'/auth.php';
