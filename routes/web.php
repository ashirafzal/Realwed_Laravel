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

Route::get('wishlist', 'Whislist@index');

Route::post('listdetail-wishlist-cancel', 'Whislist@cancel');

Route::post('listdetail-wishlist-save', 'ListDetail@wishlistsave');

Route::get('couple-budget', 'Budget@index');

Route::post('save-budget', 'Budget@savebudget');

Route::post('delete-budget', 'Budget@deletebudget');

Route::get('couple-table-planner', 'tableplanner@index');

Route::get('couple-guestlist', 'Guestlist@index');

Route::post('create-table', 'tableplanner@createtable');

Route::post('four-seat-edit', 'tableplanner@fourseatedit');

Route::post('eight-seat-edit', 'tableplanner@eightseatedit');

Route::post('twelve-seat-edit', 'tableplanner@twelveseatedit');

Route::post('single-guestlist-submit', 'Guestlist@submit_singlelist');

Route::post('couple-guestlist-submit', 'Guestlist@submit_couplelist');

Route::post('household-guestlist-submit', 'Guestlist@submit_householdlist');

Route::get('couple-website', 'CoupleWebsite@index');

Route::get('couple-website/{id}',"CoupleWebsite@website");

Route::post('submit-website', 'CoupleWebsite@submit_website');

Route::post('show-realwedding', 'RealWedding@Showprofile');

Route::post('dont-show-realwedding', 'RealWedding@Dontshowprofile');

Route::post('save-real-wedding', 'RealWedding@SaveRealWedding');

Route::get('RealWedding', 'RealWedding@index');

Route::post('otp-validation','ForgotPassword@otp_validation');

Route::post('email-validate','MailSend@mailsend');

Route::get('delete-requestquote/{id}',"Requestquote@delete");

Route::get('requestquote-view',"Requestquote@index");

Route::post('requestquote',"ListDetail@requestquote");

Route::post('add-task',"ToDoList@addtask");

Route::post('edit-task/{id}',"ToDoList@Edit");

Route::get('delete-task/{id}',"ToDoList@Delete");

Route::get('list-detail/{id}',"ListDetail@index");

Route::get('user-singin',"LoginController@index");

Route::get('mylisting', 'MylistedItems@index');

Route::get('myprofile', 'myprofile@index');

Route::get('couple-profile', 'myprofile@couple_profile');

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

Route::get('/forgotpassword', function () {
    return view('/forgot-password');
});

Route::get('/signin', 'LoginController@index')->name('signintocontinue');

Route::get('pricing', 'Pricing@index');

Route::get('Reviews', 'Reviews@index');

Route::get('addlisting-success', 'AddListingController@index');

Route::get('editlisting-success', 'MylistedItems@index');

Route::get('todo-list', 'ToDoList@index');

Route::post('addlisting',"AddListingController@save");

Route::post('updatelisting',"Editlisting@updatelist");

Route::name('dashboard-overview')->get('/dashboard', 'DashboardController@index');

Route::get('/coupledashboard','CoupleDashboard@index')->name('couple-dashboard');

Route::name('login')->get('/signin', 'LoginController@index');

Route::name('killsession')->get('/signin', 'LogoutController@index');

Route::post('create',"RegisterController@insert");

Route::post('userlogin',"LoginController@login");