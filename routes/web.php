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

Route::get('/',"WelcomeController@index");

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

Route::get('delete-requestquote/{id}',"Requestquote@delete");

Route::get('requestquote-view',"Requestquote@index");

Route::post('requestquote',"ListDetail@requestquote");

Route::get('list-detail/{id}',"ListDetail@index");

Route::get('user-singin',"LoginController@index");

Route::get('mylisting', 'MylistedItems@index');

Route::get('myprofile', 'myprofile@index');

Route::post('submitreview',"ListDetail@submitreview");

Route::post('updatepassword',"myprofile@updatepassword");

Route::post('updateuser',"myprofile@save");

Route::get('editlisting/{id}', 'Editlisting@index');

Route::get('deletelisting/{id}', 'MylistedItems@delete');

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

Route::get('Reviews', 'Reviews@index');

Route::get('addlisting-success', 'AddListingController@index');

Route::get('editlisting-success', 'MylistedItems@index');

Route::post('addlisting',"AddListingController@save");

Route::post('updatelisting',"Editlisting@updatelist");

Route::name('dashboard-overview')->get('/dashboard', 'DashboardController@index');

Route::name('login')->get('/signin', 'LoginController@index');

Route::name('killsession')->get('/signin', 'LogoutController@index');

Route::post('create',"RegisterController@insert");

Route::post('userlogin',"LoginController@login");