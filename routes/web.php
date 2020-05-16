<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{any}', 'AppController@index')->where('any', '.*');

Route::auth();

Route::get('/', 'App\AppController@index')->name('welcome');

Route::get('/group/choose', 'App\GroupController@choose')->name('group.choose');
Route::get('/group/create', 'App\GroupController@create')->name('group.create');
Route::post('/group/store', 'App\GroupController@store')->name('group.store');
Route::get('/group/home/{id}', 'App\GroupController@show')->name('group.show');

Route::get('/task/create', 'App\TaskController@create');
Route::post('/task/store', 'App\TaskController@store')->name('task.store');