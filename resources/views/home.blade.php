<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <title> Home - {{ config('app.name') }} </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <img src="{{ asset('img/logo.png') }}" class="logo" alt="">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ route('login') }}"><p>entrar</p></a>
	      </li>
	    </ul>
	</div>
</nav>

<div class="container-fluid home">
    <div class="row home">
        <div class="col-md-7 img-home home">
        
        </div>
        <div class="col-md-5 registro home">

            <div class="form">

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
                        <label for="email">Seu email favorito:</label> <br>
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
                    <button>Registrar!</button>
                </form>
            </div>
        </div>
    </div>
</div>
    


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>