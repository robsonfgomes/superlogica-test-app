<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioExercicio3 extends Model
{
    use HasFactory;

    protected $table = 'usuario_exercicio_3';

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cpf',
        'nome',            
    ];
}
