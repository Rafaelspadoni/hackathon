@extends('layouts.layout')   

@section('titulo','cadastro telefone')

@section('conteudo') 

<h1>Adicionar Experiência:</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action=" {{ route('guarda_experiencia') }} " method="post">
        @csrf
        <div class="form-item">
            <label for="cargo">Cargo:</label> <br>
            <input type="text" name="cargo" id="cargo" required>
        </div>
        <div class="form-item">
            <label for="local">Local:</label> <br>
            <input type="text" name="local" id="local" required>
        </div>
        <div class="form-item">
            <label for="descricao">Descrição:</label> <br>
            <input type="text" name="descricao" id="descricao" required>
        </div>
        <div class="form-item">
            <label for="data">Data:</label> <br>
            <input type="date" name="data" id="data" required>
        </div>
        <br>
        <button>Cadastrar Experiência!</button>
    </form>

@endsection 