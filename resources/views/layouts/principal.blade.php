<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/principal-style.css') }}" rel="stylesheet">
        <title>@yield('title') | Nemo - A plataforma ideal pra você, Piscicultor!</title>
    </head>
    <div id="site">
        <header>
            <nav id="menu">
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/listar/pisciculturas">Minhas Pisciculturas</a></li>
                    <li><a href="/logout">Sair</a></li>
                    <li>
                        Olá, 
                        {{  \Auth::user()->name }}
                    </li>
                </ul>
            <nav>

            <img class="header-image" src="http://www.stickpng.com/assets/images/58f37995a4fa116215a92421.png" />
            <h1 class="h1">Nemo</h1>
            <h3 class="h3">A plataforma ideal pra você, Piscicultor!</h3>
            
        </header>
        <body>
            <section class="content">
                @yield('conteudo')
            </section>
        </body>
        <footer>
            Adelino L. | Mateus R. | Victor S.<br>
            <a target="_blank" href="https://github.com/AdelinoN/Nemo/">Repositório GitHub</a>
        </footer>
    </div>
</html>