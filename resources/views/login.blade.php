@extends('layouts.home-layout')

@section('titulo', 'login')

@section('link', '/')
@section('nome-link', 'registrar')

@section('formulario')

    <h1>Bem vindo de volta!</h1>

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

    <form action=" {{ route('login') }} " method="post">
        @csrf

        <div class="form-item">
            <label for="email">Seu email cadastrado:</label> <br>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-item">
            <label for="senha">Sua senha:</label> <br>
            <input type="password" name="password" id="password" required>
        </div>
        <br>
        <a href='/forgot-password'>esqueceu sua senha?</a>
        <br>
        <button>Entrar!</button>
    </form>

@endsection