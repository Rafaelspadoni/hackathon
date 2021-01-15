@extends('layouts.layout')   

@section('titulo','cadastro telefone')

@section('conteudo') 

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('guarda_telefone') }}" method="post">

@csrf

<input type="number" name="telefone" id=""><br>
<button>Cadastrar!</button>
</form>

@endsection