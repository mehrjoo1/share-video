<?php

use App\Http\Controllers\CategoryVideoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('videos/create', [VideoController::class, 'create'])->name('videos.create');
Route::post('videos', [VideoController::class, 'store'])->name('videos.store');
Route::get('videos/{video}', [VideoController::class, 'show'])->name('videos.show');
Route::get('videos/{video}/edit', [VideoController::class, 'edit'])->name('videos.edit');
Route::post('videos/{video}', [VideoController::class, 'update'])->name('videos.update');

Route::get('categories/{category}/videos', [CategoryVideoController::class, 'index'])->name('categories.videos.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/email',[MailController::class,'test'])->name('email.test');
