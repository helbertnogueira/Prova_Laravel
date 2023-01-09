<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="body-login">
    <div class="tela-login">
        <h1>Login</h1>
        <input class="input-login" type="text" placeholder="Nome">
        <br><br>
        <input class="input-login" type="password" placeholder="Senha">
        <br><br>
        <button href="{{ route('cadastro.blade.php') }}" class="button-login">Acessar</button>
        <br><br>
        <button class="button-cadastro-login">Cadastrar</button>
    </div>
</body>
</html>