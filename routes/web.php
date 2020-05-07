<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{any}', 'AppController@index')->where('any', '.*');

Route::auth();

Route::get('/', 'AppController@index')->name('welcome');