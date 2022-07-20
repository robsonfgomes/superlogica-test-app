<?php

namespace App\Http\Controllers;

use App\Models\UsuarioExercicio3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Exercicio3Controller extends Controller
{
    public function index()
    {
        $usuarios = DB::table('usuario_exercicio_3')
                       ->join('info_exercicio_3', 'info_exercicio_3.cpf', 'usuario_exercicio_3.cpf')
                       ->where('info_exercicio_3.genero', 'M')
                       ->where('info_exercicio_3.cpf', '<>', '59875804045')
                       ->select(
                            'usuario_exercicio_3.nome', 
                            'info_exercicio_3.genero',
                            DB::raw('IF(year(curdate())-info_exercicio_3.ano_nascimento > 50, "SIM", "NÃO") AS maior_50_anos'))                                              
                       ->orderByDesc('usuario_exercicio_3.nome')                       
                       ->get();
        
        return view('exercicio-3', [
            'usuarios' => $usuarios,
        ]);
    }
}
