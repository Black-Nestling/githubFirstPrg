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

Route::get('/user', function () {
    return view('user');

Route::get('/login', function () {
    return view('login');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/user', function () {
    return view('user');
});


Route::get('/user2', function () {
    return view('user2');
});
