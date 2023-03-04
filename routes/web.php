<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\bykost\AboutkostController;
use App\Http\Controllers\masing\TestmonkostController;
use App\Http\Controllers\bykost\FasilikostController;
use App\Http\Controllers\FooterkostController;
use App\Http\Controllers\TestmonController;
use App\Http\Controllers\StokostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\DetailkostController;

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
//     return view('layouts.main');
// });
Route::get('/', [DetailkostController::class,'index'])->name('home');
// Route::get('/kost', [DetailkostController::class,'index'])->name('kost');
Route::get('/kost', [DetailkostController::class,'kost'])->name('kost');
Route::get('/kost/{$id}', [DetailkostController::class,'show'])->name('kost.detail');

// Route::get('/login', [AuthController::class, 'index'])->name('login.view');
// Route::post('/login', [AuthController::class, 'login'])->name('login.validate');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', function () {
        return view('admin.index', ['title' => 'Dashboard']);
    })->name('user.dashboard');

    Route::get('/user/profil', [AboutkostController::class,'index'])->name('user.profil');
    Route::post('/user/profil/update', [AboutkostController::class,'update'])->name('user.profil.update');

    Route::get('/user/fasilitas',[FasilikostController::class,'index'])->name('user.fasilitas');
    Route::post('/user/fasilitas/update',[FasilikostController::class,'update'])->name('user.fasilitas.update');

    Route::get('/user/contact', [FooterController::class,'index'])->name('user.contact');
    Route::Post('/user/contact/update', [FooterController::class,'update'])->name('user.contact.update');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
