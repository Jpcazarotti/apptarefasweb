@extends('layout')

@section('content')
    <h2>Lista de Tarefas</h2>
    <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" name="task" placeholder="Digite uma nova tarefa" required>
            <button class="btn btn-warning" type="submit"><i class="fa-regular {{-- fa-plus --}}">+</i> Adicionar</button>
        </div>
    </form>
    <ul class="list-group mt-4">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <input type="checkbox" class="form-check-input me-2" id="task1" name="status">
                <span>Task One</span>
            </div>

            <div class="btn-group">
                <a href="#" class="btn btn-light btn-sm"><i class="fa-regular fa-edit"></i></a>
                <form action="#" method="post" class="btn-group">
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </li>
    </ul>
@endsection
