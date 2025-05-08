@extends('layout')

@section('content')
    <h2>Lista de Tarefas</h2>
    <form action="{{ route('adicionar') }}" method="post">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="tarefa" placeholder="Digite uma nova tarefa" required>
            <button class="btn btn-warning" type="submit"><i class="fa-regular {{-- fa-plus --}}">+</i> Adicionar</button>
        </div>
    </form>
    <ul class="list-group mt-4">
        @foreach ($tarefas as $tr)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <input type="checkbox" class="form-check-input me-2" name="status" {{ $tr->status ? 'checked' : '' }}>
                    <span>{{ $tr->tarefa }}</span>
                </div>

                <div class="btn-group">
                    <a href="{{ route('editar', $tr->id) }}" class="btn btn-light btn-sm"><i class="fa-regular fa-edit"></i></a>
                    <form action="{{ route('deletar', $tr->id) }}" method="post" class="btn-group"
                        onsubmit="return  confirm('Tem certeza que deseja excluir?')">                       
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
