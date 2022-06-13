<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
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

Route::get('proveedores',[ProveedorController::class,'HandleGetProveedores']);
Route::get('proveedor/{id}',[ProveedorController::class,'HandleGetProveedor']);
Route::post('proveedor',[ProveedorController::class,'HandleStoreProveedor']);
Route::put('proveedor',[ProveedorController::class,'HandleUpdateProveedor']);
Route::delete('proveedor/{id}',[ProveedorController::class,'HandleDeleteProveedor']);

