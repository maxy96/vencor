<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//PRODUCTOS
Route::get('/productos', 'ProductosController@index')->name('productos');
Route::get('/nuevo-producto', 'ProductosController@formNuevoProducto')->name('formulario.nuevoProducto');
Route::post('nuevo-producto', 'ProductosController@store')->name('guardar.producto');


Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//TIPO DE PRODUCTO
Route::post('nuevo-tipo-producto', 'TiposProductosController@store')->name('nuevo.tipo.producto');

//Carrito
//Route::get('/', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart.index');// - mostrar carrito
Route::post('/add', 'CartController@add')->name('cart.store');// - agregar al carrito
Route::post('/update', 'CartController@update')->name('cart.update');// - modificar carrito
Route::post('/remove', 'CartController@remove')->name('cart.remove');// -  eliminar un producto del carrito
Route::post('/clear', 'CartController@clear')->name('cart.clear');// - limpiar carrito
Route::get('/cart/ordenar', 'OrdenController@index')->name('ordenar.producto');

//Route::get('/ad', 'MercadoPago@setupPaymentAndGetRedirectURL');
Route::get('/merca', 'MercadoPagoController@getCreatePreference');

