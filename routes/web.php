<?php

App::setlocale('es');

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' => 'project']);

// Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
// Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');
// Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');
// Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portfolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
