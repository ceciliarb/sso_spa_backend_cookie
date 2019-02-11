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
        <p class="lead">Frontend (SPA) consumindo microserviços</p>
        <p class="lead">Vuejs (Adapter Nativo de JS) + Laravel (keycloak-php Adapter) / cookie </p>
    </div>
    <div id="app">
        <app></app>
    </div>
    <script type="text/javascript" src="js/vueapp.js"></script>

</body>
</html>
