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
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', 'MailController@store');



Route::get('/test', function () {
	return view('test');
});

Route::get('/toolsProducts', function () {
    return view('toolsProducts');
});

Route::get('/fashionProducts', function () {
    return view('fashionProducts');
});
