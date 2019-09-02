@extends('layouts.app')
@section('content')
    <div>
        <div>  
            <div>
                <h3>Detalhes de Aluno</h3>
                <hr>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nome: </strong> {{ $biodata->name }} {{ $biodata->lastname }}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Turma: </strong> {{ $biodata->class }}
            </div>
            <div class="col-md-12">
            <a href="{{ route('biodata.index') }}" class="btn btn-sm btn-success">Voltar</a>
            </div>
        </div>
    </div>
@endsection
