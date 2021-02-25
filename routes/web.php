<?php

use Illuminate\Support\Facades\Route;

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

Route::get('', function() {

    return view('welcome');
});


// https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller

// Route::resource('postings', 'PostingController');

Route::get('/postings', 'PostingController@index')->name('postings.index');
Route::get('/postings/create', 'PostingController@create')->name('postings.create');
Route::post('/postings', 'PostingController@store')->name('postings.store');
Route::get('/postings/{id}', 'PostingController@show')->name('postings.show');
Route::get('/postings/{id}/edit', 'PostingController@edit')->name('postings.edit');
Route::put('/postings/{id}', 'PostingController@update')->name('postings.update');
Route::delete('/postings/{id}', 'PostingController@destroy')->name('postings.destroy');
