<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\ComparisonController;
use App\Http\Controllers\ComparisonQuestionController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\RelativeWeightController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SvectorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\VectorVController;
use App\Models\VectorV;
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

// HOME
Route::get('/', function () {
    return view('home', [
        "title" => "SPK-DEMO"
    ]);
});

// REGISTER USER
Route::get('/daftar-akun', [UserRegisterController::class, 'index'])->middleware('guest');
Route::post('/daftar-akun', [UserRegisterController::class, 'store']);

// LOGIN USER
Route::get('/login', [UserLoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserLoginController::class, 'authenticate']);
Route::post('/logout', [UserLoginController::class, 'signout']);

// PROFILE USER
Route::resource('/profile', UserController::class);
Route::get('/reset-akun', [ResetController::class, 'resetAkun']);

// ALTERNATIF
Route::resource('/alternatif', AlternatifController::class);

// KRITERIA
Route::resource('/kriteria', CriteriaController::class);

// BOBOT RELATIF
Route::get('/bobot-relatif/hitung', [RelativeWeightController::class, 'hitungBobotRelative']);

// PERTANYAAN PERBANDINGAN
Route::resource('/pertanyaan-perbandingan', ComparisonQuestionController::class);

// PERBANDINGAN
Route::resource('/perbandingan', ComparisonController::class);

// VEKTOR S
Route::resource('/vektor-s', SvectorController::class);

// VEKTOR V
Route::resource('/vektor-v', VectorVController::class);

?>