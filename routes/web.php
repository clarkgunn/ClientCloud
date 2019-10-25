<?php

Route::get('/')->uses('WelcomeController')->name('welcome');
Route::get('/about')->uses('AboutController')->name('about');
Route::get('/register')->uses('Auth\RegisterController')->name('register');
Route::get('/login')->uses('Auth\LoginController')->name('login');
Route::get('/verification')->uses('Auth\VerificationController')->name('verification');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

