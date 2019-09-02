@extends('layouts.app')
@section('content')
    <div class="conteiner">
        <div class="row">
            <div class="col-lg-12">
                <h3>Editar Aluno</h3>
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

        <form action="{{ route('biodata.update', $biodata->id) }}" method="post">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <strong>Nome Aluno: </strong>
                    <input type="text" name="name" class="form-control" value="{{ $biodata->name }}">
                </div>
                <div class="col-md-12">
                    <strong>Sobrenome Aluno: </strong>
                    <input type="text" name="lastname" class="form-control" value="{{ $biodata->lastname }}">
                </div>
                <div class="col-md-12">
                    <strong>Turma do Aluno: </strong>
                    <input type="text" name="class" class="form-control" value="{{ $biodata->class }}">
                </div>

                <div class="col-md-12">
                <a href="{{ route('biodata.index') }}" class="btn btn-sm btn-success">Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
                </div>
            </div>
        </form>

    </div>
@endsection