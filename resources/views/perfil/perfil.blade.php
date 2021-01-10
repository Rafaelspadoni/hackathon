@extends('layouts.layout')

@section('titulo', 'Perfil')

@section('conteudo')

@foreach ($telefones as $telefone)
The current value is {{ $telefone [$loop->index]->telefone }}
@endforeach


@endsection