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

Route::get('mylisting', 'MylistedItems@index');

Route::get('myprofile', 'myprofile@index');

Route::get('updateuser',"myprofile@save");

Route::post('updatepassword',"myprofile@updatepassword");

Route::get('/dashboard', function () {
    return view('/dashboard');
});

Route::get('/coupledashboard', function () {
    return view('/coupledashboard');
});

Route::get('/dashboardaddlisting', 'AddListingController@index');

Route::get('/logout', function () {
    return redirect()->route('killsession');
});

Route::get('/sigin', 'LoginController@index')->name('signintocontinue');

Route::get('addlisting-success', 'AddListingController@index');

Route::post('addlisting',"AddListingController@save");

Route::name('dashboard-overview')->get('/dashboard', 'DashboardController@index');

Route::name('login')->get('/sigin', 'LoginController@index');

Route::name('killsession')->get('/sigin', 'LogoutController@index');

Route::post('create',"RegisterController@insert");

Route::post('userlogin',"LoginController@login");