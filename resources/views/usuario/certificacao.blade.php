@extends('layouts.layout')   

@section('titulo','Adicionar Certificação')

@section('conteudo') 

<h1>Adicionar Certificação:</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action=" {{ route('guarda_certificacao') }} " method="post">
        @csrf
        <div class="form-item">
            <label for="nome">Nome da Certificação:*</label> <br>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="form-item">
            <label for="descricao">Descrição:</label> <br>
            <input type="text" name="descricao" id="descricao">
        </div>
        <div class="form-item">
            <label for="certificadora">Certificadora:*</label> <br>
            <input type="text" name="certificadora" id="certificadora" required>
        </div>
        <div class="form-item">
            <label for="concessao">Data:*</label> <br>
            <input type="date" name="concessao" id="concessao" required>
        </div>
        <div class="form-item">
            <label for="link_da_certificacao">Link da Certificação:</label> <br>
            <input type="url" name="link_da_certificacao" id="link_da_certificacao">
        </div>
        <br>
        <button>Cadastrar Certificação!</button>
    </form>

@endsection 