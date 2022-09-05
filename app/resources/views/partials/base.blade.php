<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body class="bg-indigo">
    <nav class="navbar mb-auto navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
                    <a class="nav-link" aria-current="page" href="{{ route('index') }}">Funcionários</a>
                    <a class="nav-link" aria-current="page" href="{{ route('clients.index') }}">Clientes</a>
                    <a class="nav-link" aria-current="page" href="{{ route('contact') }}">Contato</a>
                    <a class="nav-link" aria-current="page" href="{{ route('about') }}">Sobre</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="text-dark d-flex text-left aligns-items-center justify-content-center w-100 h-100 mx-auto flex-column">
        @yield('conteudo')
    </main>

    <footer class="mt-auto mb-auto text-center py-3 text-dark bg-light">
        CRUD em Laravel, by <a href="https://www.linkedin.com/in/savio-lopes/">@saviolopes</a>.
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
