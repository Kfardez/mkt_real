<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Showthis') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container border">

        <nav class="navbar navbar-expand-md navbar-success bg-alerte shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/actualite') }}" >
                    Retour/
                </a>
                    <span><b>L.C.M.K.T</b></span>
            </div>
        </nav>

        <main class="py-4">
            @yield('contenu')
        </main>
    </div>

    <br>

    <div class="container" style="text-align:center">
      <div class="copyright">
        2021 &copy; <strong><span>Mari Kə Tal</span></strong>
      </div>
      <div class="credits">
        Designed & Developed by <a href="mailto:djiraibesr@gmail.com">Rodriguez.SD</a>
      </div>
    </div>

    <br>
    <br>
</body>
</html>
