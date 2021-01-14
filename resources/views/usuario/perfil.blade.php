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
        </div>
    </div>

<hr>

    <div class="row">
        <div class="col-md-12">
        <div class="item"><div class="titulo">telefone(s):</div>

        <table>
            @foreach ($telefones as $telefone)
               <tr>
               <td>{{ $telefone->telefone }} </td>
               <td> <form action="{{ route('deletar_telefone') }}" method="post" style="width: 155px; display: inline-block "> @csrf <input type="hidden" name="telefone" value=" {{ $telefone->id }} " /> <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Excluir telefone</a></form></td>
               </tr> 
            @endforeach
        </table>

        <a href="{{ route('cadastra_telefone') }}">Adicionar Telefone</a>
        </div>
        </div>
    </div>
    
<hr>

    <div class="row">
        <div class="col-md-12">
            <div class="item"><div class="titulo">Resumo:</div></div>
        </div>
    </div>

<hr>

<div class="row">
        <div class="col-md-12">
        <div class="item"><div class="titulo">Experiência(s):</div>

        <table>
            @foreach ($experiencias as $experiencia)
               <tr>
               <td>{{ $telefone->telefone }} </td>
               <td> <form action="{{ route('deletar_telefone') }}" method="post" style="width: 155px; display: inline-block "> @csrf <input type="hidden" name="telefone" value=" {{ $telefone->id }} " /> <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Excluir telefone</a></form></td>
               </tr> 
            @endforeach
        </table>

        <a href="{{ route('cadastra_telefone') }}">Adicionar Telefone</a>
        </div>
        </div>
    </div>







</div>




@endsection