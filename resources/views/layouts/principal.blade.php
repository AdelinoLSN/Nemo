<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/principal-style.css') }}" rel="stylesheet">
        <title>@yield('title') | Nemo - A plataforma ideal pra você, Piscicultor!</title>
    </head>
    <header>
            <img class="header-image" src="http://www.stickpng.com/assets/images/58f37995a4fa116215a92421.png" />
            <h1 class="h1">Nemo</h1>
            <h3 class="h3">A plataforma ideal pra você, Piscicultor!</h3>
            <?php
                $user = \Auth::user();
                if ($user != NULL){
                    echo("Olá, ");
                    echo($user->name);
                    echo("!");
                }else{
                    echo("Você está desconectador!");
                }
            ?>
            <div class="navbar">
                <a href="/listar/pisciculturas">Inicio</a>
                <a href="/listar/pisciculturas">Minhas Pisciculturas</a>
                <a href="/logout">Sair</a>
            </div>
    </header>
    <body>
        <section class="content">
            @yield('conteudo')
        </section>
    </body>
    <footer>
        Todos os direitos reservados aos desenvolvedores.<br>
        Adelino L. | Mateus R. | Victor S.<br>
        <a target="_blank" href="https://github.com/AdelinoN/Nemo/">Repositório GitHub</a>
    </footer>
</html>