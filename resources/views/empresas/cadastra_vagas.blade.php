@extends('layouts.empresa-layout')

@section('titulo', 'Cadastrar Vaga')

@section('conteudo')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 registro ">
            
            <div class="form">
                
            <h1>Publicar Vaga:</h1>

            @if ($errors->any())
                    <div class="font-medium text-red-600">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            @endif

            <form action=" {{ route('guarda_vagas') }} " method="post" class="cadastro_vagas">
                @csrf
                <div class="form-item">
                    <label for="cargo">Cargo:</label> <br>
                    <input type="text" name="cargo" id="cargo" required>
                </div>
                <div class="form-item">
                    <label for="descricao">Descrição da vaga:</label> <br>
                    <textarea name="descricao" id="descricao" class="descricao" required></textarea>
                </div>
                <div class="form-item">
                    <label for="local_de_trabalho">Município da vaga:</label> <br>
                    <input type="text" name="local_de_trabalho" id="local_de_trabalho" required>
                </div>
                <div class="form-item">
                    <label for="tipo_de_contratacao">Tipo da contratação:</label> <br>
                    <select name="tipo_de_contratacao" id="tipo_de_contratacao" required>
                    <option value="1"> Integral </option>
                    <option value="2"> Meio Período </option>
                    <option value="3"> Home Office </option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="expiracao">Data de Expiração:</label> <br>
                    <input type="date" name="expiracao" id="expiracao" required>
                </div>
                <div class="form-item">
                    <label for="salario" text-align="right">Faixa Salarial</label> <br>
                    <input type="number" step="0.01" name="salario" id="salario">
                </div>
                <div class="form-item">
                    <label for="link_de_vaga">Link da vaga</label> <br>
                    <input type="url" name="link_de_vaga" id="link_de_vaga">
                </div>
                <br>
                <button>Publicar</button>
            </form>

                
            </div>
        </div>

        <div class="col-md-4 img-home vaga-img">
        
        </div>
    </div>
</div>

   

@endsection


