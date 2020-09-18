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
    return view('category');
});
Route::get('/', 'CategoryController@index');

Route::get('/my', function () {
    return view('my');
});
Route::get('/categories', function () {
    return view('category');
});

Route::get('/categories', 'CategoryController@index'
);
Route::get('/categories/{id}', 'CategoryController@detail'
)->name('categories.detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

