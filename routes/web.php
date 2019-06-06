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

Route::get('/registro', 'RegistroController@registro');

Route::get('/login', 'LoginController@login');

Route::get('/', function () {
    return view('welcome');
});
