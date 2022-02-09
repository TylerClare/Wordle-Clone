<html>
    <head>
        <title>Wordle Clone</title>
        @include('styles')
    </head>
    <body class="nightmode">
        <div id="game">
            <header>
                <div class="menu">
                    <button class="icon">
                        <i class="fa-regular fa-circle-question menu-icon"></i>
                    </button>
                </div>
                <div class="title">Wordle</div>
                <div class="menu">
                    <button class="icon">
                        <i class="fa-solid fa-gear menu-icon"></i>
                    </button>
                </div>
            </header>

            @yield('content')
        </div>
    </body>
</html>