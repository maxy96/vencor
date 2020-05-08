<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('promocion', 'PromocionController');
Route::apiResource('tipos-productos', 'Api\TiposProductosController');
Route::apiResource('producto', 'Api\ProductosController');
Route::apiResource('proveedores', 'Api\ProveedoresController');
Route::apiResource('token', 'Api\TokensController');
Route::apiResource('pagos', 'Api\PagosController');
Route::apiResource('tipos-pagos', 'Api\TiposPagosController');




