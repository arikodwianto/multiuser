<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Langsung redirect ke login
Route::get('/', function () {
    return redirect()->route('login');
});


// Halaman dashboard (Breeze default)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Halaman profil (Breeze default)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Hanya Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});

// Hanya User
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', function () {
        return view('user.dashboard');
    });
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    // Form tambah user
    Route::get('/admin/users/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.users.store');
});
