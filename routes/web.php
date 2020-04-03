<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index');
//PRODUCTOS
Route::get('/productos', 'ProductosController@index')->name('productos');
Route::get('/nuevo-producto', 'ProductosController@formNuevoProducto')->name('formulario.nuevoProducto');
Route::post('nuevo-producto', 'ProductosController@store')->name('guardar.producto');


Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home');

//TIPO DE PRODUCTO
Route::post('nuevo-tipo-producto', 'TiposProductosController@store')->name('nuevo.tipo.producto');

//CONTACTO
Route::get('/nuevo-contacto', 'ContactoController@index')->name('form.contacto');// - Mostrar formulario contacto.
Route::post('/nuevo-contacto', 'ContactoController@store')->name('guardar.contacto');// - Guardar Contacto.

//Carrito
//Route::get('/', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart.index');// - mostrar carrito
Route::post('/add', 'CartController@add')->name('cart.store');// - agregar al carrito
Route::post('/update', 'CartController@update')->name('cart.update');// - modificar carrito
Route::post('/remove', 'CartController@remove')->name('cart.remove');// -  eliminar un producto del carrito
Route::post('/clear', 'CartController@clear')->name('cart.clear');// - limpiar carrito

//ORDEN
Route::get('/orden', 'OrdenController@index')->name('orden.producto')->middleware('verified.contact', 'cart.empty');
Route::get('/orden/factura/{cod_orden}', 'OrdenController@factura')->name('orden.factura');//->middleware('cart.empty');
Route::get('/orden/compra', 'OrdenController@compraEfectivo')->name('compra.efectivo');
Route::get('/orden/compra-finalizada', 'OrdenController@compraFinalizada')->name('compra.finalizada');



//Route::get('/ad', 'MercadoPago@setupPaymentAndGetRedirectURL');
//Route::get('/merca', 'MercadoPagoController@getCreatePreference');

