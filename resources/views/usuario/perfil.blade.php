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
        @if ($telefones)
            @foreach ($telefones as $telefone)
               <tr>
               <td>{{ $telefone->telefone }} </td>
               <td> <form action="{{ route('deletar_telefone') }}" method="post" style="width: 155px; display: inline-block "> @csrf <input type="hidden" name="telefone" value=" {{ $telefone->id }} " /> <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Excluir telefone</a></form></td>
               </tr> 
            @endforeach
        @else
            <h3>Nenhum Telefone Cadastrado</h3>
        @endif    
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

        <a href="{{ route('cadastro_experiencia') }}">Adicionar Experiencia</a>
       
        @if ($experiencias)
            @foreach ($experiencias as $experiencia)
               <div style="margin-top: 10px">
                    <table>
                        <tr>
                            <td class="titulo">
                                {{ $experiencia->cargo }} 
                            </td>
                            <td><form action="{{ route('deletar_experiencia') }}" method="post" style="width: 175px; display: inline-block "> @csrf <input type="hidden" name="experiencia" value=" {{ $experiencia->id }} " /> <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Excluir experiência</a></form></td>
                        </tr>
                    </table>
                    <div>
                    <strong>Local: </strong> {{ $experiencia->local }}
                    </div>
                    <div>
                    <strong>Descrição: </strong> {{ $experiencia->descricao }}
                    </div>
                    <div>
                    <strong>Data: </strong> {{ $experiencia->data }}
                    </div>

               </div>
            @endforeach
        @else
            <h3>Nenhuma Experiência Cadastrada</h3>
        @endif    


        
        </div>
        </div>
    </div>

<hr>

    <div class="row">
        <div class="col-md-12">
        <div class="item"><div class="titulo">Certificações:</div>

        <a href="{{ route('cadastro_certificacao') }}">Adicionar Certificação</a>
       
        @if ($certificacoes)
            @foreach ($certificacoes as $certificacao)
               <div style="margin-top: 10px">
                    <table>
                        <tr>
                            <td class="titulo">
                                {{ $certificacao->nome }} 
                            </td>
                            <td><form action="{{ route('deletar_certificacao') }}" method="post" style="width: 175px; display: inline-block "> @csrf <input type="hidden" name="certificacao" value=" {{ $certificacao->id }} " /> <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Excluir Certificação</a></form></td>
                        </tr>
                    </table>
                    <div>
                        <strong>Certificadora: </strong> {{ $certificacao->certificadora }}
                    </div>
                    @if ($certificacao->descricao)
                        <div>
                            <strong>Descrição: </strong> {{ $certificacao->descricao }}
                        </div>
                    @else
                    @endif
                    <div>
                        <strong>Data de Concessão: </strong> {{ $certificacao->concessao }}
                    </div>
                    @if ($certificacao->link_da_certificacao)
                        <div>
                            <a href=" {{ $certificacao->link_da_certificacao }} " target="__blank">Abrir Certificação</a>
                        </div>
                    @else
                    @endif   

               </div>
            @endforeach
        @else
            <h3>Nenhuma Certificação Cadastrada</h3>
        @endif    


        
        </div>
        </div>
    </div>







</div>




@endsection