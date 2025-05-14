<?php

use App\Http\Controllers\Api\TarefaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('tarefas', [TarefaController::class, 'index']);
Route::get('tarefas/{tarefa}', [TarefaController::class, 'show']);
Route::post('tarefas/', [TarefaController::class, 'store']);
Route::post('tarefas/{tarefa}', [TarefaController::class, 'update']);
Route::post('tarefas/deletar/{tarefa}', [TarefaController::class, 'destroy']);
