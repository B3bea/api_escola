<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; //importa a fachada do excel
use App\Imports\AlunosImport; //importa a classe que criei
use Maatwebsite\Excel\Validators\ValidationException; 

class ImportacaoController extends Controller
{
    public function importarAlunos(Request $request)
    {
        $request->validate([
        'arquivo_alunos' => 'required|file|mimes:csv,xlsx,xls',
        ]);

        $arquivo = $request->file('arquivo_alunos');

    Excel::import(new AlunosImport, $arquivo);

    return response()->json([
        'message' => 'Tentativa de importação por índice CONCLUÍDA! Verifique o banco de dados.'
    ], 200);
}
}