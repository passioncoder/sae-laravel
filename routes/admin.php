<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AdminController@home')->name('admin.home');
