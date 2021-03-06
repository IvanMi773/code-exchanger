<?php

use Illuminate\Support\Facades\Route;

// Other routes
Route::auth();

Route::get('/', 'App\AppController@index')->name('welcome');
Route::get('/how-it-works', 'App\AppController@howItWorks')->name('howItWorks');

// Group routes
Route::get('/group/choose', 'App\GroupController@choose')->name('group.choose');
Route::get('/group/create', 'App\GroupController@create')->name('group.create');
Route::get('/group/enter', 'App\GroupController@enter')->name('group.enter');
Route::post('/group/store', 'App\GroupController@store')->name('group.store');

Route::middleware('canSeeGroupPage')->group(function () {
    Route::get('/group/home/{group}', 'App\GroupController@show')->name('group.show');
    Route::get('/group/edit/{group}', 'App\GroupController@edit')->name('group.edit');
    Route::post('/group/update/{group}', 'App\GroupController@update')->name('group.update');
    Route::delete('/group/delete/{group}', 'App\GroupController@destroy')->name('group.delete');
    Route::delete('/group/user/delete/{group}', 'App\GroupController@groupUserDelete')->name('group.user.delete');
    Route::post('/group/user/add/{group}', 'App\GroupController@addUser');
});

// Task routes
Route::get('/task/create', 'App\TaskController@create');
Route::post('/task/store', 'App\TaskController@store')->name('task.store');
Route::get('/task/{task}', 'App\TaskController@show');
Route::get('/task/edit/{task}', 'App\TaskController@edit')->name('task.edit');
Route::post('/task/update/{task}', 'App\TaskController@update')->name('task.update');
Route::delete('/task/delete/{task}', 'App\TaskController@destroy')->name('task.delete');