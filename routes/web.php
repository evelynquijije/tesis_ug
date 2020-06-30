<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/*Route::get('/usuarios', 'UserController@index');*/
Route::resource('usuarios','UserController');
Route::resource('/admin/periodo','PeriodoController');
Route::resource('/admin/carrera','CarreraController');
