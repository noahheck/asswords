<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta property="og:url" content="{{ url() ->current() }}">
        <meta property="og:title" content="Ass Words">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Ass Words as a service - Display an Ass Word every time you visit the site!!!">
        <meta property="og:image" content="">


        <title>Ass Words</title>

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>
    <body class="d-flex flex-column min-vh-100">

        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('ass') }}">Ass Words</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <span class="navbar-text d-none d-md-block"> | </span>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('validate') }}">Validator</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container main-content">

            @yield('content')

        </div>

        <div class="footer mt-auto bg-dark text-light d-flex justify-content-between">
            <p>&copy {{ date('Y') }} asswords.com</p>
            <p>
                <a href="https://github.com/noahheck/asswords">
                    <span class="bi-github"></span> Github
                </a>
                <a href="https://twitter.com/ass_words" class="ms-2">
                    <span class="bi-twitter"></span> Twitter
                </a>
            </p>
        </div>

    </body>
</html>
