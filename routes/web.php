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

Route::get('/', 'PagesController@home');
Route::get('/2', 'PagesController@home2');
Route::get('/about-us', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');


//
//
//Route::get('/contact', function () {
//    return view('contact');
//});
//
//Route::get('/about-us', function () {
//    return view('aboutus');
//});
//


