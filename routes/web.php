<?php

/** General Routes */

Route::get('/', "WelcomeController@index");

Route::get('/Dresses', function () { return view('general.Dresses'); });

Route::get('/vendor-by-category', function () { return view('general.vendorbycategory'); });

Route::get('/vendor-by-location', function () { return view('general.vendorbylocation'); });

Route::get('/contact-us', function () { return view('general.contact-us'); });

Route::get('/about-us', function () { return view('general.about-us'); });

Route::get('/faq', function () { return view('general.faq'); });

Route::get('/forgotpassword', function () { return view('general.forgot-password'); });

Route::get('/list', function () { return view('general.list'); });

Route::get('list-detail/{id}', "ListDetail@index");
Route::get('couple-website/{id}', "CoupleWebsite@website");
Route::get('/logout', 'LogoutController@index');
Route::post('otp-validation', 'ForgotPassword@otp_validation');
Route::post('email-validate', 'MailSend@mailsend');

/** General Routes End */

/** Vendor Routes */
Route::middleware('auth')->group(function () {

    /** Dashboard Routes */
    Route::get('/dashboard', function () {
        return view('/dashboard');
    });
    Route::name('dashboard-overview')->get('/dashboard', 'DashboardController@index');
    /** Dashboard Routes ends*/

    /** Listing Routes */
    Route::get('/dashboardaddlisting', 'AddListingController@index');
    Route::get('mylisting', 'MylistedItems@index');
    Route::get('editlisting/{id}', 'Editlisting@index');
    Route::get('deletelisting/{id}', 'MylistedItems@delete');
    Route::get('addlisting-success', 'AddListingController@index');
    Route::get('editlisting-success', 'MylistedItems@index');
    Route::post('addlisting', "AddListingController@save");
    Route::post('updatelisting', "Editlisting@updatelist");
    /** Listing Routes ends*/

    /** Pricing Routes */
    Route::get('pricing', 'Pricing@index');
    /** Pricing Routes end*/

    /** Request Quotes Routes */
    Route::get('requestquote-view', "Requestquote@index");
    /** Request Quotes Routes end*/

    /** Reviews Routes */
    Route::get('Reviews', 'Reviews@index');
    /** Reviews Routes */

    /** Profile Routes */
    Route::get('myprofile', 'myprofile@index');
    Route::post('updatepassword', "myprofile@updatepassword");
    Route::post('updateuser', "myprofile@save");
    /** Profile Routes ends */
});
/** Vendor Routes End*/

/** Couple Routes */
Route::middleware('auth')->group(function () {

    Route::get('/coupledashboard', 'CoupleDashboard@index')->name('couple-dashboard');

    /** Wishlist routes */
    Route::get('wishlist', 'Whislist@index');
    Route::post('listdetail-wishlist-cancel', 'Whislist@cancel');
    Route::post('listdetail-wishlist-save', 'ListDetail@wishlistsave');
    /** Wishlist routes ends */

    /** ToDo list routes */
    Route::get('todo-list', 'ToDoList@index');
    Route::post('add-task', "ToDoList@addtask");
    Route::post('edit-task/{id}', "ToDoList@Edit");
    Route::get('delete-task/{id}', "ToDoList@Delete");
    /** ToDo list routes ends */

    /** Budget routes */
    Route::get('couple-budget', 'Budget@index');
    Route::post('save-budget', 'Budget@savebudget');
    Route::post('delete-budget', 'Budget@deletebudget');
    /** Budget routes ends */

    /** Couple Website route*/
    Route::get('couple-website', 'CoupleWebsite@index');
    Route::post('submit-website', 'CoupleWebsite@submit_website');
    /** Couple Website routes end*/

    /** Couple Profile route*/
    Route::get('couple-profile', 'myprofile@couple_profile');
    /** Couple profile route end */

    /** Real Wedding Routes */
    Route::post('show-realwedding', 'RealWedding@Showprofile');
    Route::post('dont-show-realwedding', 'RealWedding@Dontshowprofile');
    Route::post('save-real-wedding', 'RealWedding@SaveRealWedding');
    Route::get('RealWedding', 'RealWedding@index');
    /** Real We3dding Routes ends*/

    /** Table Planner Routes */
    Route::get('couple-table-planner', 'tableplanner@index');
    Route::post('create-table', 'tableplanner@createtable');
    Route::post('four-seat-edit', 'tableplanner@fourseatedit');
    Route::post('eight-seat-edit', 'tableplanner@eightseatedit');
    Route::post('twelve-seat-edit', 'tableplanner@twelveseatedit');
    /** Table Planner Routes ends */

    /** Guest List Routes */
    Route::get('couple-guestlist', 'Guestlist@index');
    Route::post('single-guestlist-submit', 'Guestlist@submit_singlelist');
    Route::post('couple-guestlist-submit', 'Guestlist@submit_couplelist');
    Route::post('household-guestlist-submit', 'Guestlist@submit_householdlist');
    /** Guest List Routes ends */

    /** Request Quote Routes */
    Route::get('delete-requestquote/{id}', "Requestquote@delete");
    Route::post('requestquote', "ListDetail@requestquote");
    /** Request Quote Routes end */

    /** Review Routes */
    Route::post('submitreview', "ListDetail@submitreview");
    /** Review Routes end*/

});
/** Couple Routes End */

/** Laravel Auth Routes */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/** Laravel Auth Routes end */
