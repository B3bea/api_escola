<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
    public function listarAlunos($id){
        //encontra a turma e ja carrega os alunos para otimizar a busca
        $turma = Turma::with('alunos')->findOrFail($id);

        //retorna apenas a lista de alunos daquela turma em JSON
        return response()->json($turma->alunos);
    }
}
