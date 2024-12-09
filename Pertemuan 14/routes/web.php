<?php

use App\Http\Controllers\HalController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\BiodataController;
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

Route::get('/web', function () {
    return "Halo, Selamat datang di tutorial belajar laravel www.malasngoding.com";
});

Route::get('/halo/{panggil}', function ($nama) {
    return "HAAAAAI $nama";
});

Route::get('/halo/{nama}/{panjang}', function ($nama, $panjang) {
    return "HAAAAAI $nama $panjang";
});

Route::get('/home', [BioController::class, 'nama function']);
Route::get('/wawwy/{panggil}', [BioController::class, 'halo']);

Route::get('/web', function () {
    return view('home'); //lokasi = resource/views
})->name('home');

Route::get('/web/about', function () {
    return view('about'); //lokasi = resource/views
})->name('about');

Route::get('/contact', function () {
    return view('contact'); //lokasi = resource/views
})->name('contact');

Route::get('/new', [PageController::class, 'home'])->name('home');

Route::get('/baru/home', [HalController::class, 'home'])->name('topmenu1_blade');
Route::get('/baru/about', [HalController::class, 'about'])->name('topmenu2_blade');
Route::get('/baru/contact', [HalController::class, 'contact'])->name('topmenu3_blade');
Route::resource('biodatas', BiodataController::class);