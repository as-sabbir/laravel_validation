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

Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/add', 'HomeController@add')->name('home.add');
Route::post('/home/add', 'HomeController@create');
Route::get('/home/stdList', 'HomeController@show')->name('home.stdlist');
Route::get('/home/edit/{sid}', 'HomeController@edit')->name('home.edit');
Route::post('/home/edit/{sid}', 'HomeController@update');
Route::get('/home/details/{sid}', 'HomeController@details')->name('home.details');
Route::get('/home/delete/{sid}', 'HomeController@delete')->name('home.delete');
Route::post('/home/delete/{sid}', 'HomeController@destroy');

Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');




