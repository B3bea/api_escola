<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ImportacaoController;

// // Nova rota na raiz da API para verificar se o servidor está no ar.
// Route::get('/', function () {
//     // Retorna uma resposta JSON com a mensagem desejada.
//     // O método `json()` já define o cabeçalho 'Content-Type' como 'application/json'.
//     return response()->json(['mensagem' => 'servidor rodando']);
// });

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
    return $request->user();
    });

    Route::post('/importar/alunos', [ImportacaoController::class, 'importarAlunos']);
});
