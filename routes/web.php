<?php
//RUTAS CON MIDDLEWARE //
Route::get('/create', 'ProductController@create')->middleware('auth');

Route::post('/create/validate', 'ProductController@save')->middleware('auth');

Route::post('/product/edit/{id}', 'ProductController@update')->middleware('auth');

Route::get('/product/edit/{id}', 'ProductController@edit')->middleware('auth');





// RUTAS CON AUTH / LOGEO //
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('cerrarSesion', 'Auth\LoginController@logout')->name('logout');





// RUTAS GENERALES //
Route::get('/carrito', 'CartController@showCart');

Route::post('/carrito/{id}', 'CartController@addToCart');

Route::get('/products', 'ProductController@index');

Route::get('/index', 'IndexController@home');

Route::get('/cajaBlanca', 'CajaBlancaController@cajaBlanca');

Route::get('/consolas', 'ConsolaController@consolas');

Route::get('/equipos', 'EquiposController@equipos');

Route::get('/exito', 'ExitoController@exito');

Route::get('/quienesSomos', 'QuienesSomosController@quienesSomos'); // Tambien routea parte del footer

Route::get('/libroDeQuejas', 'LibroDeQuejasController@libroDeQuejas');





// RUTEO HOME LARAVEL
Route::get('/', function () {
    return view('welcome');
});
