<?php

namespace Database\Seeders;

use App\Models\Tarefa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tarefas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tarefas = [
            ['tarefa' => 'Estudar API', 'status' => 0],
            ['tarefa' => 'Aula de Web', 'status' => 1],
            ['tarefa' => 'Fazer Compras', 'status' => 0],
            ['tarefa' => 'Comprar um Carro', 'status' => 0],
            ['tarefa' => 'Pegar um chocolate para o Professor', 'status' => 0],
            ['tarefa' => 'Recarregar o Celular', 'status' => 1],
        ];

        foreach ($tarefas as $tarefa) {
            Tarefa::create($tarefa);
        }
    }
}
