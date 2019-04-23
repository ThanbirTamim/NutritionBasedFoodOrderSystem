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


Route::get('/', 'ClientController@index');
Route::get('/clientsorder', 'ClientsOrderController@index');
Route::post('/order', 'ClientController@order');
Route::post('/ordertaken', 'OrderController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/data','DataController');
Route::post('/report','ReportController@MisReport');
Route::get('/report','ReportController@index');
Route::resource('/aboutsection','AboutSectionController');
Route::resource('/videosection','VideoSectionController');
Route::resource('/admininfo2','AdminInfoController2');




Route::prefix('customer')->group(function (){
    Route::get('/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.login');
    Route::post('/login', 'Auth\CustomerLoginController@login')->name('customer.login.submit');
    Route::get('/cart', 'CustomerTransactionController@cart');
    Route::get('/transaction', 'CustomerTransactionController@alltransaction');
    Route::get('/order', 'CustomerTransactionController@order');
    Route::post('/order', 'CustomerTransactionController@order');
    Route::post('/ordertaken', 'CustomerTransactionController@transaction');
    Route::post('/foodrecommand', 'CustomerTransactionController@foodrecommend');
    Route::get('/', 'CustomerController@index')->name('customer.dashboard');
});