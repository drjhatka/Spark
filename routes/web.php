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

//============ FRONTEND ROUTES ================//
Route::get('/', function () {
    return view('frontend.index');
});

//=========================Add Customer ================//
Route::get('/add-cust-person','FrontendController@addCustPersonForm')->name('add_cust_person_form');
Route::post('/add-cust-person','CustomerController@storeCustomerPerson')->name('store_cust_person');

//========================Edit Customer================//
Route::get('/edit-cust-person/{id}','FrontendController@editCustomerPersonForm')->name('edit_cust_person_form');
Route::post('/edit-cust-person/{id}', 'CustomerController@editCustomerPerson')->name('edit_cust_person');

//========================View Customer================//
Route::get('/view-all-customer' ,'CustomerController@viewAllCustomer')->name('view_all_customer_person');

Route::get('view-cust-person/{id}','CustomerController@viewCustomerPerson')->name('view_cust_person');


//=======================Chart of Accounts=============//
Route::get('/get-coa','FrontendController@getCOAForm')->name('get_coa_form');
Route::post('/post-coa','FrontController@postCOA')->name('post_coa');

//======================Savings Account================//
Route::get('/open-sb-acc','AccountController@sbAccForm')->name('sb_acc_form');
Route::post('/open-sb-acc','AccountController@saveSBAcc')->name('save_sb_acc');


//======================Chart of Accounts================//
Route::get('/coa',function(){
    return view('frontend.coa');
});
Route::post('/coa',function(){
    return view('frontend.coa');
})->name('edit.coa');

//========================JSON Routes ================//
Route::get('/get-cust-name/{id}','LogicHelper@getCustomerName');
