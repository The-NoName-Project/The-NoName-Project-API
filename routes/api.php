<?php

namespace App\Http\Controllers\Api;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

        // * Rutas de la api para categorias
Route::get('/categories', [ApiCategoryController::class, 'index']);
Route::post('/categories/store', [ApiCategoryController::class, 'store']);
Route::get('/categories/{categories}', [ApiCategoryController::class, 'show']);
Route::get('/categories/{id}/edit', [ApiCategoryController::class, 'edit']);
Route::put('/categories/{id}/update', [ApiCategoryController::class, 'update']);
Route::delete('/categories/{id}/delete', [ApiCategoryController::class, 'destroy']);

        // * Rutas de la api para productos
Route::get('/products', [ApiProductsController::class, 'index']);
Route::post('/products/store', [ApiProductsController::class, 'store']);
Route::get('/products/{products}', [ApiProductsController::class, 'show']);
Route::get('/products/{id}/edit', [ApiProductsController::class, 'edit']);
Route::put('/products/{id}/update', [ApiProductsController::class, 'update']);
Route::delete('/products/{id}/delete', [ApiProductsController::class, 'destroy']);

        // * Rutas de la api para ventas
Route::get('/sales',[ApiSalesController::class, 'index']);
Route::post('/sales/store',[ApiSalesController::class, 'store']);
Route::get('/sales/{sale}',[ApiSalesController::class, 'show']); //Mostrar una sola venta
Route::get('/sales/{id}/edit',[ApiSalesController::class, 'edit']);
Route::put('/sales/{id}/update',[ApiSalesController::class, 'update']);
Route::delete('/sales/{id}/delete',[ApiSalesController::class, 'destroy']);

        // * Rutas de la api para detalles de ventas
Route::get('/detailsales',[ApiDetailSalesController::class, 'index']);
Route::post('/detailsales/store',[ApiDetailSalesController::class, 'store']);
Route::get('/detailsales/{deta}',[ApiDetailSalesController::class, 'show']);
Route::get('/detailsales/{id}/edit',[ApiDetailSalesController::class, 'edit']);
Route::put('/detailsales/{id}/update',[ApiDetailSalesController::class, 'update']);
Route::delete('/detailsales/{id}/delete',[ApiDetailSalesController::class, 'destroy']);        

//Rutas de la api para el login de usuarios
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);