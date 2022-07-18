<?php

use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\TestimoniController;
use App\Models\Home;
use App\Models\Galeri;
use App\Models\Testimoni;
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


Route::get('/program-pembelajaran', function () {
    return view('pages.program');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/', function () {
    return view('pages.home',[
        'galeris' => Galeri::latest()->get(),
        'homes' => Home::all(),
        'testimonis'=> Testimoni::all()
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard.index',[
        'galeri' => Galeri::count()
    ]);
})->middleware('auth');
Route::resource('/dashboard/home', HomeController::class)->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout']
);
Route::resource('/dashboard/galeri', GaleriController::class)->middleware('auth');
Route::resource('/dashboard/about', AboutController::class)->middleware('auth');
Route::resource('/dashboard/testimoni', TestimoniController::class)->middleware('auth');
Route::resource('/dashboard/artikel', ArtikelController::class)->middleware('auth');