<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/sponsor', function () {
    return view('sponsor');
});

Route::get('/mediapartner', function () {
    return view('mediapartner');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/1', function () {
    return view('blogs/interview');
});

Route::get('/blog/2', function () {
    return view('blogs/magang');
});

Route::get('/blog/3', function () {
    return view('blogs/cv');
});

Route::get('/blog/4', function () {
    return view('blogs/keterampilan');
});

Route::get('/jobvacancy', [LowonganController::class, 'index']);