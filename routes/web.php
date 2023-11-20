<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.app.dashboard-simpadu', ['type_menu' => '']);
})->name('dashboard');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('pages.auth.auth-register', ['type_menu' => '']);
})->name('register');

Route::get('/forgot', function () {
    return view('pages.auth.auth-forgot-password', ['type_menu' => '']);
})->name('forgot');

Route::get('/reset', function () {
    return view('pages.auth.auth-reset-password', ['type_menu' => '']);
})->name('reset');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');

