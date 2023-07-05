<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('index');
});*/


Route::get('/{instansi_id}', function () {
    return view('aplikasi.index');
});


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'ceklogin'])->name('ceklogin');
Route::post('/login', [LoginController::class, 'ceklogin'])->name('ceklogin');


Route::get('/menu/index', [MenuController::class, 'index'])->name('menu.index')->middleware('auth');

Route::get('/aplikasi/create', [AplikasiController::class, 'create'])->name('aplikasi.create');
Route::post('/aplikasi/store', [AplikasiController::class, 'store'])->name('aplikasi.store');




Route::get('/layanan/index', [AplikasiController::class, 'index'])->name('layanan.index');



Route::get('/logout', [LoginController::class, 'logout'])->name('logout');






