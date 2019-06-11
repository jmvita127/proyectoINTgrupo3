<?php

Route::get('/create', 'ProductController@create');

Route::post('/create/validate', 'ProductController@save');

Route::get('/carrito', 'CartController@showCart');

Route::post('/carrito/{id}', 'CartController@addToCart');

Route::post('/products/edit/{id}', 'ProductController@update');

Route::get('/products/edit/{id}', 'ProductController@edit');

Route::get('/products', 'ProductController@index');

Route::get('/index', 'IndexController@home');

Route::get('/cajaBlanca', 'CajaBlancaController@cajaBlanca');

Route::get('/consolas', 'ConsolaController@consolas');

Route::get('/equipos', 'EquiposController@equipos');

Route::get('/quienesSomos', 'QuienesSomosController@quienesSomos');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
