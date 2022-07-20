<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UsuarioExercicio1 extends Model
{
    use HasFactory;

    protected $table = 'usuario_exercicio_1';
    
    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'userName',
        'zipCode',
        'email',
        'password',        
    ];

    /**
     * Método responsável por criptografar a senha do usuário automaticamente.
     * @param string $senha
     */
    public function setPasswordAttribute(string $senha){
        $this->attributes['password'] = Hash::make($senha);        
    }
}
