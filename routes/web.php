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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route :: view ('/','home');

/*Route::get('contact', function () {
    return view('contact');
    //return "<H1>Contact US</H1>";
});*/

Route::view('contact','contact');

/*Route::get('about', function () {
    return view('about');
    //return "<H1>About US</H1>";
});*/

Route :: view ('about','about');

Route :: get('customers','CustomersController@index');

Route :: get('customers/create','CustomersController@create');

Route :: post('customers' , 'CustomersController@store');
