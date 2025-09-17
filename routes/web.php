<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataMahasiswaController;

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

Route::get('/', function () {
    return view('welcome');
});

// Grup route untuk halaman yang hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {
    // Halaman dashboard setelah login
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route untuk halaman input data mahasiswa (hanya bisa diakses jika sudah login)
    Route::get('/data-mahasiswa', [DataMahasiswaController::class, 'index'])->name('data-mahasiswa.index');
    Route::get('/data-mahasiswa/create', [DataMahasiswaController::class, 'create'])->name('data-mahasiswa.create');
    Route::post('/data-mahasiswa', [DataMahasiswaController::class, 'store'])->name('data-mahasiswa.store');
});

// Route untuk login dan logout (bisa diakses oleh siapa saja)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Route untuk registrasi (bisa diakses oleh siapa saja)
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
