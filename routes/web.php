<?php
  
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
  
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AdminController;
  
Route::get('/', function () {
    return view('home');
});
  
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  
Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

// Admin routes
Route::middleware(['auth', 'verified', 'role:admin,super-admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::put('/users/{user}/role', [AdminController::class, 'updateUserRole'])->name('users.update-role')->middleware('role:super-admin');
});