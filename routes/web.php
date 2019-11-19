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
    return view('home');
})->name('home');

/* Basic Route */
Route::get('blog', 'BlogController@index')->name('blog');

/* Route Group */
Route::prefix('blog')->name('blog.')->group(function(){
    Route::get('add', 'BlogController@add')->name('add');
    Route::get('edit/{id}', 'BlogController@edit')->name('edit');
    Route::post('store', 'BlogController@store')->name('store');
    Route::post('update/{id}', 'BlogController@update')->name('update');
    Route::get('delete', 'BlogController@delete')->name('delete');
});

/*
    Untuk mempersingkat route crud bisa menggunakan Route::resource
    Docs: https://laravel.com/docs/6.x/controllers#resource-controllers
*/