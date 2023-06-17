<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS da aplicação -->

    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/login.jpg" alt="JL Vault"> JL - Vault
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/contas" class="nav-link">Contas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contas/create" class="nav-link">Adicionar Conta</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contas/entrar" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contas/cadastrar" class="nav-link">Cadastrar</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg"> {{session('msg')}}</p>
                    @endif
                </div>
                @yield('content')
            </div>
        </main>
        <footer>
            <p>JL Vault &copy; 2023</p>
        </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
