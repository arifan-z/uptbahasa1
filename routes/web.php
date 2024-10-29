<?php

use Illuminate\Support\Facades\Route;

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

//router awal
Route::get('/', function () {
    return view('welcome');
});

Route::get('/UptBahasa', function () {
    return view('UptBahasa');
});


// pindah pages
use App\Http\Controllers\ProfileController;



// pindah pages profil
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');



//tampil gambar
Route::get('/gambar', function () {
    return view('gambar');
});


// Data Base
use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', function () {
    return view('register');
})->name('register.form');

// register
Route::post('/register', [RegisterController::class, 'showregister'])->name('register');

// button pindah login
Route::get('/login', [ProfileController::class, 'showlogin'])->name('login');
