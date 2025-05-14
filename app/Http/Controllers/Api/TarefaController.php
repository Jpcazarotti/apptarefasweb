<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\TableRowRenderer;

class TarefaController extends Controller
{
    //Listar todas as tarefas
    public function index(){
        $tarefas = Tarefa::orderBy('id', 'desc')->get();
        return response()->json($tarefas);
    }

    //Visualizar uma tarefa
    public function show($tarefa){
        try{
            $tarefa = Tarefa::findOrFail($tarefa);
            return response()->json($tarefa, 200);
        } catch(\Exception $e){
            return response()->json(['error' => 'Tarefa não encontrada'], 404);
        }
    }

    //Criar uma tarefa
    public function store(Request $request)
    {
        $request->validate([
            'tarefa' => 'required'
        ]);

        $tarefa = Tarefa::create([
            'tarefa' => $request->tarefa,
            'status' => 0
        ]);

        return response()->json($tarefa, 201);
    }

    //Atualizar uma tarefa
    public function update(Request $request, Tarefa $tarefa)
    {
        $request->validate([
            'tarefa' => 'required'
        ]);

        $tarefa->update([
            'tarefa' => $request->tarefa,
            'status' => $request->status
        ]);

        return response()->json($tarefa, 201);
    }

    //Deletar uma tarefa
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return response()->json(null, 204);
    }
}
