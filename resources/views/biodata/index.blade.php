@extends('layouts.app')
@section('content')

    <div class="conteiner">
        <div class="row">
            <div class="col-md-10">
                <h3>Lista de Alunos</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-sm btn-success" href="{{ route('biodata.create') }}">Cadastrar Novo Aluno</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-hover table-sm">
            <tr>
                <th width="50px"><b>Nº</b></th>
                <th width="300px">Nome</th>
                <th width="300px">Sobrenome</th>
                <th>Turma</th>
                <th width="180px">Ação</th>
            </tr>

            @foreach ($biodatas as $biodata)
                <tr>
                    <td><b>{{ ++$i }}.</b></td>
                    <td>{{ $biodata->name }}</td>
                    <td>{{ $biodata->lastname }}</td>
                    <td>{{ $biodata->class }}</td>
                    <td>
                        <form action="{{ route('biodata.destroy', $biodata->id) }}" method="post">
                            <a style="padding-right: 26px; padding-left: 26px; margin-bottom: 5px;" class="btn btn-sm btn-success" href="{{ route('biodata.show',$biodata->id) }}">+Detalhes</a><br>
                            <a class="btn btn-sm btn-warning" href="{{ route('biodata.edit',$biodata->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

{!! $biodatas->links() !!}
    </div>
@endsection