<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{any}', 'AppController@index')->where('any', '.*');

Route::auth();

Route::get('/', 'App\AppController@index')->name('welcome');

Route::get('/group/choose', 'App\GroupController@choose')->name('group.choose');
Route::get('/group/create', 'App\GroupController@create')->name('group.create');
Route::get('/group/enter', 'App\GroupController@enter')->name('group.enter');
Route::post('/group/store', 'App\GroupController@store')->name('group.store');
Route::get('/group/home/{group}', 'App\GroupController@show')->name('group.show');
Route::get('/group/edit/{group}', 'App\GroupController@edit')->name('group.edit');
Route::post('/group/update/{group}', 'App\GroupController@update')->name('group.update');
Route::delete('/group/delete/{group}', 'App\GroupController@destroy')->name('group.delete');

Route::get('/task/create', 'App\TaskController@create');
Route::post('/task/store', 'App\TaskController@store')->name('task.store');