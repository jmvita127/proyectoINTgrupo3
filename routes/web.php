<?php
//RUTAS CON MIDDLEWARE //
Route::get('/create', 'ProductController@create')->middleware('admin');

Route::post('/create/validate', 'ProductController@save')->middleware('admin');

Route::post('/product/edit/{id}', 'ProductController@update')->middleware('admin');

Route::get('/product/edit/{id}', 'ProductController@edit')->middleware('admin');

Route::get('/deleteProduct/{id}', 'ProductController@show')->middleware('admin');

Route::post('/deleteProduct/{id}', 'ProductController@delete')->middleware('admin');

Route::get('/exito', 'ExitoController@exito')->middleware('auth');

Auth::routes();

Route::get('/carrito/', 'CartController@showCart')->middleware('auth');

Route::post('/carrito/', 'CartController@addToCart')->middleware('auth');


// RUTAS CON NAME //

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('cerrarSesion', 'Auth\LoginController@logout')->name('logout');

// RUTAS GENERALES //

Route::get('/products', 'ProductController@index');

Route::get('/products', 'ProductController@search');

Route::get('/index', 'IndexController@home');

Route::get('/cajaBlanca', 'CajaBlancaController@cajaBlanca');

Route::get('/consolas', 'ConsolaController@consolas');

Route::get('/equipos', 'EquiposController@equipos');

Route::get('/quienesSomos', 'QuienesSomosController@quienesSomos'); // Tambien routea parte del footer

Route::get('/libroDeQuejas', 'LibroDeQuejasController@libroDeQuejas');

Route::get('/product/detalleProductos/{id}', 'ProductController@detalleProductos');

Route::post('/product/detalleProductos/{id}', 'CartController@addToCart');

//porque nos estamos confundiendo mucho entre index y home:

Route::get('/home', 'IndexController@home');


// RUTEO HOME LARAVEL
Route::get('/', function () {
    return view('welcome');
});
