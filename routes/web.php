<?php

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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/resume', function () {
    return view('frontend.resume');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});
