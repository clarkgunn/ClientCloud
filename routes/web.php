<?php

Route::get('/')->uses('WelcomeController')->name('welcome');
Route::get('/about')->uses('AboutController')->name('about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

