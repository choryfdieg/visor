<?php

App::setlocale('es');

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', 'ContactController@store');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
