@extends('layouts.home-layout')

@section('titulo', 'Home')

@section('link', '/login')
@section('nome-link', 'entrar')

@section('formulario')

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

    <form action=" {{ route('register') }} " method="post">
        @csrf
        <div class="form-item">
            <label for="name">Seu nome completo:</label> <br>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-item">
            <label for="email">Seu melhor Email:</label> <br>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-item">
            <label for="senha">Crie uma Senha:</label> <br>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="password_confirmation">Confirme sua Senha</label> <br>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <br>
        <button>Tô dentro!</button>
    </form>

@endsection
