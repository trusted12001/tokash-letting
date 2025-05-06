<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


    Route::middleware(['auth', 'role:Super Admin'])->prefix('admin')->name('admin.')->group(function () {
        // User management
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);

        // Other admin routes...
        // Route::resource('pos', \App\Http\Controllers\Admin\POSController::class);
        // Route::get('audit-logs', [\App\Http\Controllers\Admin\AuditLogController::class, 'index'])->name('audit_logs.index');
    });

require __DIR__.'/auth.php';
