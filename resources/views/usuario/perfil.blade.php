@extends('layouts.layout')

@section('titulo', 'Perfil')
@section('conteudo')




<div class="container">

<hr>

<div class="titulo"> {{ $nome }} </div>

    <div class="row">
        <div class="col-md-12">
         
            <div class="item"><div class="titulo">Email:</div>
                {{ $email }}
            </div>

            <div class="item"><div class="titulo">telefone(s):</div>
            
                @foreach ($telefones as $telefone)
                    {{ $telefone->telefone }}
                @endforeach

            </div>
    
        </div>
    </div>

<hr>
    
    <div class="row">
        <div class="col-md-12">
            <div class="item"><div class="titulo">Resumo:</div></div>
        </div>
    </div>









</div>




@endsection