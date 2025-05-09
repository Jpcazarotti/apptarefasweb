@extends('layout')

@section('content')

    <h2>Editar Tarefa</h2>
    <form action="{{ route('atualizar', $tarefa->id) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <input type="text" name="tarefa" class="form-control" value="{{ $tarefa->tarefa }}">
        </div>
        <div class="my-3">
            <label><input type="radio" name="status" value="0" class="form-check-input me-2" {{$tarefa->status == 0 ? 'checked' : ''}}>Pendente</label>
            <label class="mx-2"><input type="radio" name="status" value="1" class="form-check-input  me-2" {{$tarefa->status == 1 ? 'checked' : ''}}>Concluído</label>
        </div>
        <button type="submit" class="btn btn-warning">Salvar</button>
    </form>

@endsection