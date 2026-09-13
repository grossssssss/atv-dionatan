<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Aluno::create([
                'nome' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'curso' => fake()->randomElement([
                    'Engenharia de Software',
                    'Desenvolvimento de Sistemas',
                    'Sistemas de Informação'
                ]),
            ]);
        }
    }
}