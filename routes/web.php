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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin route

Route::get('/admin', 'AdminController@index');
Route::post('/admin-dashboard', 'AdminController@admindashboard');

//Route::get('/dashboard', 'AdminController@dashboard');

Route::post('/complainshow', 'ComplaintableController@store');

Route::get('/allcomplain', 'AdminController@allcomplain');

Route::get('/adminlogout', 'AdminController@adminlogout');




 // Route::get('/userdashboard', 'ComplaintableController@userdashboard'); 


