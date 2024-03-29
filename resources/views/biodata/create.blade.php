@extends('layouts.app')
@section('content')
    <div class="conteiner">
        <div class="row">
            <div class="col-lg-12">
                <h3>Novo Aluno</h3>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erro</strong> Houve um problema nos campos digitados. <br>
                <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('biodata.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col-md-12">
                    <strong>Nome Aluno: </strong>
                    <input type="text" name="name" class="form-control" placeholder="Nome do Aluno">
                </div>
                <div class="col-md-12">
                    <strong>Sobrenome Aluno: </strong>
                    <input type="text" name="lastname" class="form-control" placeholder="Sobrenome do Aluno">
                </div>
                <div class="col-md-12">
                    <strong>Turma do Aluno: </strong>
                    <input type="text" name="class" class="form-control" placeholder="Turma do Aluno">
                </div>

                <div class="col-md-12">
                <a href="{{ route('biodata.index') }}" class="btn btn-sm btn-success">Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
                </div>
            </div>
        </form>

    </div>
@endsection