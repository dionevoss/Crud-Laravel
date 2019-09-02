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
            <div class="row">
                <div class="col-md-12">
                    <strong>Nome Alun: </strong>
                    <input type="text" name="nome" class="form-control" placeholder="Nome do Aluno">
                </div>
            </div>
        </form>

    </div>
@endsection