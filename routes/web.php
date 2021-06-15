<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DynamicPDFController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UploadController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [DashboardController::class, 'utama']);

Route::get('/login', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin', [DashboardController::class, 'admin'])->name('admin');
    Route::get('/aboutUs', [DashboardController::class, 'about'])->name('about');
    Route::get('/pesan/{id}', [PesanController::class, 'index']);
    Route::post('/pesan/{id}', [PesanController::class, 'pesan']);
    Route::get('/checkout', [PesanController::class, 'checkout'])->name('checkout');
    Route::delete('checkout/{id}', [PesanController::class, 'delete']);

    Route::get('konfirmasi', [PesanController::class, 'konfirmasi']);
    Route::post('/bayar', [PesanController::class, 'bayar']);


    Route::get('profil', [ProfilController::class, 'index']);
    Route::post('profil', [ProfilController::class, 'update']);

    Route::get('/upload', [UploadController::class, 'index'])->name('upload');
    Route::get('pembayaran', [PesanController::class, 'pembayaran']);


    Route::get('/edit/{id}', [AdminController::class, 'index']);
    Route::post('edit', [AdminController::class, 'edit']);
    Route::delete('delete/{id}', [AdminController::class, 'delete']);
    Route::get('/add', [AdminController::class, 'add']);
    Route::post('/tambah', [AdminController::class, 'tambah']);


    Route::get('/dibayar', [AdminController::class, 'dibayar']);
    // Route::get('/info', [AdminController::class, 'info']);
    Route::get('/info/{id}', [AdminController::class, 'info']);

    Route::get('/user', [AdminController::class, 'user'])->name('user');
    Route::delete('deleteUser/{id}', [AdminController::class, 'deleteUser']);

    Route::get('/dynamic_pdf/pdf', [DynamicPDFController::class, 'pdf']);
    Route::get('/dynamic_pdf/cetak_pdf', [DynamicPDFController::class, 'cetak_pdf']);
});
