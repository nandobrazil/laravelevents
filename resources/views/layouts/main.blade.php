<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        Logo
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar evento</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Contato</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Meus eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                            @csrf
                                <a href="/logout" class="nav-link" 
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                Sair
                                </a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastre-se</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg col-md-3">{{ session('msg') }}</p>
                    @endif
                    @yield('content')                
                </div>
            </div>
        </main>
        <footer>
            <p>KW Teste &copy; 2021</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
