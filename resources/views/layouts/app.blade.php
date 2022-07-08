<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" href="{{ asset('icons/favicon.png')  }}" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('login') }}">
                    <img src="{{ asset('icons/favicon.png') }}" width="40" alt="">{{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::is('register'))
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ url('/') }}"><span class="align-middle" data-feather="log-in" class="align-text-bottom"></span> {{ __('Login') }}</a>
                        </li>
                        @else (Route::is('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><span class="align-middle" data-feather="user-plus" class="align-text-bottom"></span> {{ __('Register') }}</a>
                        </li>
                        @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <img src="{{ asset('icons/favicon.png') }}" width="23" alt="">
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">&copy; 2022 BambooGym, Inc</span>
                </div>

                <ul class="nav col-md-7 justify-content-end list-unstyled d-flex">
                    <li class="ms-7">
                        <small class="text-muted">Created By @Bagus Setiawan</small>
                    </li>
                </ul>
            </footer>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

</body>

</html>