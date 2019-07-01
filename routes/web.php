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
Route::group(['prefix' => 'tasks'], function () {
    Route::get('/', 'TaskController@index')->name('tasks.index');
    Route::get('create', 'TaskController@create')->name('tasks.create');
    Route::post('add', 'TaskController@add')->name('tasks.add');
    Route::get('edit/{id}', 'TaskController@edit')->name('tasks.edit');
    Route::post('update/{id}', 'TaskController@update')->name('tasks.update');
    Route::get('show/{id}', 'TaskController@show')->name('tasks.show');
    Route::get('delete/{id}', 'TaskController@delete')->name('tasks.delete');
});