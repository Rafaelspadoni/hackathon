@extends('layouts.empresa-layout')

@section('titulo', 'Home')

@section('conteudo')

<div class="container-fluid">
<div class="row">

<div class="col-md-12"><h1>Minhas Vagas:</h1></div>

@if ($vagas)
@foreach ($vagas as $vaga)

<div class="vaga">
    <div class="vaga-item">{{ $vaga->cargo }}</div>
    <div class="vaga-item">Descrição: {{ $vaga->descricao }}</div>
    <div class="vaga-item">Local de trabalho: {{ $vaga->local_de_trabalho}}</div>
    <div class="vaga-item">Tipo de Contratação: {{ $vaga->periodo}}</div>
    <div class="vaga-item">{{ $vaga->expiracao}}</div>
    @if ($vaga->salario)
        <div class="vaga-item">{{ $vaga->salario}}</div>
    @endif
    @if ($vaga->link_da_vaga)
        <div class="vaga-item"><a href="{{ $vaga->link_da_vaga }}" target="__blank">Candidatar-se</a></div>
    @else
        <a href="">Candidatar-se</a>
    @endif

    <div class="vaga-item"><form action="{{ route('deletar_vaga') }}" method="post" style="width: 100%; display: inline-block "> @csrf <input type="hidden" name="vaga" value=" {{ $vaga->id }} " /> <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Excluir Vaga</a></form></div>
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
