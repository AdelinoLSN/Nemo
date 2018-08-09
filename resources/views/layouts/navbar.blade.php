<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/home"><img width="100px" src="https://i.imgur.com/zXDg6Bm.png" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    @auth
        @include('layouts.navbarauth')
    @endauth

    @guest
        @include('layouts.navbarguest')
    @endguest


</nav>