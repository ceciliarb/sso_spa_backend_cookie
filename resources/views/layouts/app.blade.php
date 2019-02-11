<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="css/app.css">

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

    <title>@yield('title')</title>
</head>
<body class="container">
    <div class="jumbotron">
        <h1 class="display-4">POC de Single Sign-On SPA</h1>
        <p class="lead">Utilizando keycloak-php + Adapter Nativo de JS </p>
    </div>
    <div class="row text-right mb-2">
        <div class="col">
            <a href={{ url('home') }}>Home</a> |
            <a href={{ url('infousu') }}>Info</a> |
            {{--  <a href={{ url('desenvolvedor') }}>Rota para Desenvolvedor</a> |  --}}
            {{--  <a href={{ url('gerente') }}>Rota para Gerente</a> |  --}}
            {{--  <a href={{ url('admin') }}>Rota para Admin</a> |  --}}
            <a href={{ url('logout') }}>Logout</a>
        </div>
    </div>
    <div class="card p-3">
        <div id="app">
            @yield('content')
        </div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
