<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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
    return view('frontend');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/Index', function () {
    return view('Index');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/tugaslogin', function () {
    return view('tugaslogin');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

Route::get('/linktree', function () {
    return view('linktree');
});



