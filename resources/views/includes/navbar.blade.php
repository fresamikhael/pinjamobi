<nav class="
    navbar navbar-expand-lg navbar-light navbar-rental
    fixed-top
    navbar-fixed-top
    "
    data-aos="fade-down">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="/images/logo.svg" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cars') }}"
                        class="nav-link {{ request()->is('cars*') ? 'active' : '' }}">Mobil</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('rentals') }}"
                        class="nav-link {{ request()->is('rentals*') ? 'active' : '' }}">Rental</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link {{ request()->is('faq') ? 'active' : '' }}">FAQ</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Daftar</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ route('login') }}" class="btn btn-info nav-link px-4 text-white">Login</a>
                    </li>
                @endguest
            </ul>

            @auth
                <!-- Desktop Menu-->
                <ul class="navbar-nav d-none d-lg-flex">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                            <img src="
                    @if (Auth::user()->photo != null) {{ Storage::url(Auth::user()->photo) }}
                    @else
                        /images/profilephoto.jfif @endif"
                                alt="" class="rounded-circle mr-2 profile-picture" />
                            Hi, {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('dashboard-myorder') }}" class="dropdown-item">Pesanan Saya</a>
                            <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">Akun Saya</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

                <!-- Mobile Menu-->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="{{ route('dashboard-myorder') }}" class="nav-link">Pesanan Saya</a>
                        <a href="{{ route('dashboard-settings-account') }}" class="nav-link">Akun Saya</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="nav-link"> Hi, {{ Auth::user()->name }} </a>
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                            @csrf
                        </form>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
