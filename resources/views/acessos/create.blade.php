@extends('layouts.app')

@section('title', 'Usuários Cadastrados')

@section('content')

<body class="body-login">
    <div class="tela-login">
      <form-1 action="{{ route('acessos-store') }}" method="POST">
        @csrf
        @method('POST')
        <h2>Login e Cadastro</h2>
          <hr>
            <input class="input-login" type="text-submit" placeholder="E-mail Acessar ou Cadastrar...">
            <br><br>
            <input class="input-login" type="password" placeholder="Senha Acessar ou Cadastrar...">
            <br><br>
            <button type="submit" class="button-login">Acessar</button>
            <br><br>
            <button type="submit" value = "gravar" class="button-cadastro-login">Cadastrar</button>
        </form>
    </div>


@endsection