<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', )</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="body-total">
    @yield('content')
</body>
</html>