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

Route::get('/afhaal', function () {
    return view('afhaal');
});

Route::get('/hoofdmenu', function () {
    return view('hoofdmenu');
});

Route::get('/feesten', function () {
    return view('feesten');
});

Route::get('/buffet', function () {
    return view('buffet');
});

Route::get('/catering', function () {
    return view('catering');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/events', function () {
    return view('events');
});

