<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function(){
	redirect()->route('dashboard');
});

Auth::routes();

//Detail Lomba
Route::get('/capture-the-flag', 'LombaController@indexCtf');
Route::get('/programming-contest-competition', 'LombaController@indexProg');
Route::get('/web-design-competition', 'LombaController@indexWeb');
Route::get('/android-application-competition', 'LombaController@indexAndro');
Route::get('/design-product-competition', 'LombaController@indexDesign');

//dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::put('/dashboard/submit', 'DashboardController@store')->name('store');

//dashboard admin

//all
Route::get('/dashboard/admin', 'AdminController@index');
//ctf
Route::get('/dashboard/admin/ctf', 'AdminController@ctf');
//prog
Route::get('/dashboard/admin/prog', 'AdminController@prog');
//andro
Route::get('/dashboard/admin/andro', 'AdminController@andro');
//web
Route::get('/dashboard/admin/web', 'AdminController@web');
//design
Route::get('/dashboard/admin/design', 'AdminController@design');