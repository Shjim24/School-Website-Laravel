<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// --- PUBLIC ROUTES ---
Route::get('/', function () {
    return view('index');
});

// --- AUTHENTICATION ROUTES ---
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// --- HOME REDIRECT ---
Route::get('/home', function() {
    // Redirect based on role after login
    if (auth()->user()->hasRole(['admin', 'super-admin'])) {
        return redirect()->route('admin.dashboard');
    }
    return redirect('/'); // Regular users go to homepage
})->name('home')->middleware('auth');

// --- ADMIN ROUTES ---
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    // Dashboard (accessible by admin & super-admin)
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('role:admin|super-admin')->name('dashboard');
    
    // User Management (accessible ONLY by super-admin)
    Route::resource('users', UserController::class)->middleware('role:super-admin');
});