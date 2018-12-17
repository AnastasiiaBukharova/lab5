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

Route::get('home', function () {
    return view('home', ["page"=>"home"]);
});
Route::get('portraits', function () {
    return view('portraits', ["page"=>"portraits"]);
});
Route::get('/gallery', function () {
    return view('gallery', ["page"=>"gallery"]);
});
Route::get('/contacts', function () {
    return view('contacts', ["page"=>"contacts"]);
});