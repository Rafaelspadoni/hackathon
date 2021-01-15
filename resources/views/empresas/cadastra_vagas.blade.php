@extends('layouts.empresa-layout')

@section('titulo', 'Cadastrar Vaga')

@section('conteudo')

    <h1>Junte-se a nós!</h1>

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

    <form action=" {{ route('guarda_vagas') }} " method="post">
        @csrf
        <div class="form-item">
            <label for="cargo">Cargo:</label> <br>
            <input type="text" name="cargo" id="cargo" required>
        </div>
        <div class="form-item">
            <label for="descricao">Descrição da vaga:</label> <br>
            <input type="text"  name="descricao" id="descricao" required>
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
        <input type="number" name="salario" id="salario" style="text-align: center;">
        </div>
        <div class="form-item">
            <label for="link_de_vaga">Link da vaga</label> <br>
            <input type="url" name="link_de_vaga" id="link_de_vaga">
        </div>
        <br>
        <button>Criar Vaga</button>
    </form>

@endsection


