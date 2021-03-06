<?php

use App\Http\Controllers\ProdutoController;
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

Route::get('/teste', [ProdutoController::class, 'index']);

Route::post('/teste', [ProdutoController::class, 'store']);

Route::put('/teste/{id}', function ($id) {
    return "Testando id: {$id}";
});

Route::delete('/teste/{id}', function ($id) {
    return "id: {$id} deletado com sucesso!";
});
