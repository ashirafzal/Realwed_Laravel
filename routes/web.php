<?php

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
    return view('welcome');
});

Route::get('/Dresses', function () {
    return view('/Dresses');
});

Route::get('/list', function () {
    return view('/list');
});

Route::get('/vendor-by-category', function () {
    return view('/vendorbycategory');
});

Route::get('/vendor-by-location', function () {
    return view('/vendorbylocation');
});

Route::get('/contact-us', function () {
    return view('/contact-us');
});

Route::get('/about-us', function () {
    return view('/about-us');
});

Route::get('/faq', function () {
    return view('/faq');
});

Route::get('/register', function () {
    return view('/register');
});

Route::get('/signin', function () {
    return view('/signin');
});

Route::post('/store',"login@store");