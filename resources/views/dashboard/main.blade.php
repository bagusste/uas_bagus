<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>{{ config('app.name') }}</title>

    <link href="{{  asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{  asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('icons/favicon.png') }}" type="image/x-icon">
</head>

<body>

    @include('dashboard.header')

    <div class="container-fluid">
        <div class="row">
            @include('dashboard.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
                <div class="container mt-5">
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
            </main>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>