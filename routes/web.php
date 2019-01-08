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

/* Redirect to welcome page */
Route::get('/', function () {
    return view('welcome');
});

/* Redirects to login page*/
Route::get('/login', function () {
    return view('login');
});

/* Redirects to home page */
Route::get('/home', function () {
    return view('home');
});

/* Rrdirects to create user test page */
Route::get('/create/user/test', function () {
    return view('test.create');
});

/* Saves created test data */
Route::post('/create/test', 'TestController@create');

/* Redirects to test created page with gererated url */
Route::get('/test/created/{id}', 'TestController@created');

Auth::routes();
