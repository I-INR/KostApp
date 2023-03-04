<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\bykost\AboutkostController;
use App\Http\Controllers\bykost\TestmonkostController;
use App\Http\Controllers\bykost\FooterController;
use App\Http\Controllers\bykost\FasilikostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestmonController;
use App\Http\Controllers\StokostController;

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

// Route::get('/main', function () {
//     return view('layouts.main');
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/kost/{id}', [HomeController::class,'show']);

Route::get('/main/testimonial', function () {
    return view('layouts.main')->with('section', 'testimonial');
});
Route::get('/main/about', function () {
    return view('layouts.main')->with('section', 'about');
});
Route::get('/main/testimonial', function () {
    return view('layouts.main')->with('section', 'testimonial');
});

// Route::get('/login', function () {
//     return view('layouts.login');
// });

Route::get('/kost_arnest', function () {
    return view('layouts.kost_arnest');
});
Route::get('/kost_arnest/main', function () {
    return view('layouts.main');
});
Route::get('/kost_fuad', function () {
    return view('layouts.kost_fuad');
});
Route::get('/kost_ilham', function () {
    return view('layouts.kost_ilham');
});
Route::get('/kost_kombas', function () {
    return view('layouts.kost_kombas');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin', function () {
        return view('admin.dashboard', ['title' => 'Dashboard']);
    })->name('admin.dashboard');

    Route::get('/admin/profil', [AboutkostController::class,'index'])->name('admin.profil');
    Route::post('/admin/profil/update', [AboutkostController::class,'update'])->name('admin.profil.update');

    Route::get('/admin/fasilitas',[FasilikostController::class,'index'])->name('admin.fasilitas');
    Route::post('/admin/fasilitas/update',[FasilikostController::class,'update'])->name('admin.fasilitas.update');

    Route::get('/admin/contact', [FooterController::class,'index'])->name('admin.contact');
    Route::Post('/admin/contact/update', [FooterController::class,'update'])->name('admin.contact.update');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
