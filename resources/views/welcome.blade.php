<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

</head>

<body class="antialiased">
    <header>
        <div class="container">
            <img src="../img/dc-logo.png" alt="">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            characters
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            comic
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            movies
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            tv
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            games
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            collectibles
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            video
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            fans
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            news
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            shops
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>

</html>