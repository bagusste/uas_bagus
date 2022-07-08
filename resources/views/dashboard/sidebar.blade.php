<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{ url('/home') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('members') ? 'active' : '' }}" href="{{ url('/members') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Members
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('tambahan') ? 'active' : '' }}" href="{{ url('/tambahan') }}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Tambahan
                </a>
            </li>
        </ul>
        <ul class="nav flex-column pt-5" style="position: relative; top: 350px;">
            <li>
                <div class="container">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button onclick="return confirm('Do You Want To Exit ?');" class="nav-link text-start w-100 align-middle btn border-0 bg-transparent" type="submit"><span data-feather="power" class="align-text-bottom"></span> Logout</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>