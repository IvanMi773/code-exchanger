<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{any}', 'AppController@index')->where('any', '.*');

Route::auth();

Route::get('/', 'App\AppController@index')->name('welcome');

Route::get('/group/choose', 'App\GroupController@choose')->name('group.choose');