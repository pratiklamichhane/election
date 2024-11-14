<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContoller;
use App\Http\Middleware\isAdmin;

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


//ADMIN ROUTES WITH NAME PREFIX AND NAMESPACES
Route::middleware(['auth', isAdmin::class])->prefix('admin')->group(function () {
    Route::get('/users', [UserContoller::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserContoller::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserContoller::class, 'edit'])->name('users.edit');
    Route::post('users/approve/{user}', [UserContoller::class, 'approve'])->name('users.approve');
    Route::put('/users/{user}', [UserContoller::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserContoller::class, 'destroy'])->name('users.destroy');
});