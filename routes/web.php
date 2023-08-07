<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoggedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', [GuestController::class, 'index'])->name('guest.index');

Route::get('/project/create', [LoggedController::class, 'create'])->name('project.create');
Route::post('/project/store', [LoggedController::class, 'store'])->name('project.store');

Route::get('/show/{id}', [LoggedController::class, 'show'])->middleware(['auth'])->name('project.show');

Route::get('/edit/{id}', [LoggedController::class, 'edit'])->middleware(['auth'])->name('project.edit');
Route::put('/update/{id}', [LoggedController::class, 'update'])->middleware(['auth'])->name('project.update');

// Route::delete('/destroy/{id}', [LoggedController::class, 'delete'])->middleware(['auth'])->name('project.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
