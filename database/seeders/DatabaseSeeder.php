<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Usuários

        \App\Models\UsuarioExercicio3::factory()->create([
            'cpf' => '16798125050',
            'nome' => 'Luke Skywalker',
        ]);

        \App\Models\UsuarioExercicio3::factory()->create([
            'cpf' => '59875804045',
            'nome' => 'Bruce Wayne',
        ]);

        \App\Models\UsuarioExercicio3::factory()->create([
            'cpf' => '04707649025',
            'nome' => 'Diane Prince',
        ]);

        \App\Models\UsuarioExercicio3::factory()->create([
            'cpf' => '21142450040',
            'nome' => 'Bruce Banner',
        ]);

        \App\Models\UsuarioExercicio3::factory()->create([
            'cpf' => '83257946074',
            'nome' => 'Harley Quinn',
        ]);

        \App\Models\UsuarioExercicio3::factory()->create([
            'cpf' => '07583509025',
            'nome' => 'Peter Parker',
        ]);


        // Informações

        \App\Models\InfoExercicio3::factory()->create([
            'cpf' => '16798125050',
            'genero' => 'M',
            'ano_nascimento' => 1976,
        ]);

        \App\Models\InfoExercicio3::factory()->create([
            'cpf' => '59875804045',
            'genero' => 'M',
            'ano_nascimento' => 1960,
        ]);

        \App\Models\InfoExercicio3::factory()->create([
            'cpf' => '04707649025',
            'genero' => 'F',
            'ano_nascimento' => 1988,
        ]);

        \App\Models\InfoExercicio3::factory()->create([
            'cpf' => '21142450040',
            'genero' => 'M',
            'ano_nascimento' => 1954,
        ]);

        \App\Models\InfoExercicio3::factory()->create([
            'cpf' => '83257946074',
            'genero' => 'F',
            'ano_nascimento' => 1970,
        ]);

        \App\Models\InfoExercicio3::factory()->create([
            'cpf' => '07583509025',
            'genero' => 'M',
            'ano_nascimento' => 1972,
        ]);
    }
}
