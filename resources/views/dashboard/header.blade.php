<header class="navbar navbar-dark sticky-top bg-secondary flex-md-nowrap p-0 shadow">
    <a class="ps-5 navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ route('home') }}"><img width="30" src="{{ asset('icons/favicon.png') }}" alt="">{{ config('app.name') }}</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav me-5 float-end">
        <a href="{{ url('/user') }}" class="nav-link {{Route::is('user')?'active':'';}}">
            {{ Auth::user()->name }}
            <span data-feather="smile" class="align-text-bottom"></span>
        </a>
    </div>
</header>