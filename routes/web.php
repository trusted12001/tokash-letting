<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
//use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\PropertyController;


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Property routes (to be implemented)
    Route::resource('properties', PropertyController::class)->names([
        'index' => 'properties.index',
        'create' => 'properties.create',
        'store' => 'properties.store',
        'show' => 'properties.show',
        'edit' => 'properties.edit',
        'update' => 'properties.update',
        'destroy' => 'properties.destroy',
    ]);
});




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin|super-admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});


Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('properties', App\Http\Controllers\Admin\PropertyController::class);
});

// Route::middleware(['auth'])->group(function () {
//     Route::resource('properties', PropertyController::class)->names('properties');
// });




require __DIR__.'/auth.php';
