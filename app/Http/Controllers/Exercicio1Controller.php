<?php

namespace App\Http\Controllers;

use App\Models\UsuarioExercicio1;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class Exercicio1Controller extends Controller
{
    /**
     * Método responsável por apresentar o formulário de cadastro e a listagem de usuários
     */
    public function index()
    {        
        return view('exercicio-1', [
            'usuarios' => UsuarioExercicio1::orderByDesc('created_at')->get()
        ]);
    }

    /**
     * Método responsável por realizar o cadastro de usuários
     */
    public function cadastrar(Request $request)
    {
        if(UsuarioExercicio1::create($this->validarRequisicao($request))) {
            return Redirect::route('ex1.index')->with('success', 'Cadastro realizado com sucesso.');
        } else {
            return Redirect::back()->with('danger', 'Falha ao realizar o cadastro.');
        }
    }


    /**
     * Método responsável por realizar a validação dos dados do formulário
     * @param Request $request
     * @return array
     */
    protected function validarRequisicao(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'min:10','max:50'],
            'userName' => ['required', 'string', 'min:5', 'max:20', 'regex:/^[a-z]+([0-9]*|[_]?[a-z0-9]+)$/', 'unique:usuario_exercicio_1,userName'],
            'zipCode' => ['required', 'digits:8'],
            'email' => ['required', 'email:rfc,dns', 'max:50', 'unique:usuario_exercicio_1,email'],
            'password' => ['required', 'string', 'min:8', 'max:20', 'regex:/^\S*(?=\S*[a-z])(?=\S*[\d])\S*$/'],
        ]);
    }
}
