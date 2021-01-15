@extends('layouts.empresa-layout')

@section('titulo', 'Home')

@section('conteudo')

<div class="container-fluid">
<div class="row">

<div class="col-md-12"><h1>Minhas Vagas:</h1></div>

@if ($vagas)
@foreach ($vagas as $vaga)
<div class="col-md-3">
<div class="card" style="width: 18rem;" >
<div class="card-body">
<h5 class="card-title">Cargo: {{ $vaga->cargo }} </h5>

<h6 class="card-subtitle mb-2 text-muted">Descrição: {{ $vaga->descricao }}</h6>
<p class="card-text">Município da Vaga: {{ $vaga->local_de_trabalho}}</p>
<a href="#" class="card-link">Link do card</a>
<a href="#" class="card-link">Outro link</a>
</div>
</div>
</div> 
@endforeach

@else

<div class="col-md 12">
<h3>Nenhuma Vaga Cadastrada</h3>

<a href="{{ route('cadastrar_vaga') }}">Cadastrar Nova Vaga</a>

</div>
@endif

</div>
</div>

@endsection 
