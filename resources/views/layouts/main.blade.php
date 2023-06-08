<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <img src="/img/hdcevents_logo.svg" alt="JL Vault">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Contas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Adicionar Conta</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/entrar" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/cadastrar" class="nav-link">Cadastrar</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
        @yield('content')
        <footer>
            <p>JL Vault &copy; 2023</p>
        </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
