<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/pedidos', [PedidoController::class, 'index']);
Route::post('/pedido', [PedidoController::class, 'store']);
Route::put('/pedido', [PedidoController::class, 'store']);
Route::delete()
