@extends('layouts.empresa-layout')

@section('titulo', 'Home')

@section('conteudo')


<div class="card" style="width: 18rem;" >
  <div class="card-body">

  

    <h5 class="card-title">Cargo: {{ $cargo }} </h5>

    <h6 class="card-subtitle mb-2 text-muted">Descrição: {{ $descricao }}</h6>
    <p class="card-text">Município da Vaga: {{ $local_de_trabalho}}</p>
    <a href="#" class="card-link">Link do card</a>
    <a href="#" class="card-link">Outro link</a>
  </div>
</div>


@endsection

