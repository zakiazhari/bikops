<div class="boundary-align uk-sticky" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980; background-color:#85603f">

        <div class="uk-navbar-left" style="margin-left: 15px;">

            <ul class="uk-navbar-nav">
                <a href="{{ url('/') }}" style="text-decoration: none">
                    {{-- <img src="{{URL('/images/logo.png')}}" style="width: 6.8em"> --}}
                    <h1 class="text-white mx-5">Bikop.id</h1>
                </a>
            </ul>

        </div>

        <div class="nav-overlay uk-navbar-right" style="margin-right: 15px">
            <ul class="uk-navbar-nav" style="align-items: center">
                @auth
                    @if (Auth::user()->hasRole('user'))
                        <li><a class="text-white {{ Request::is('/') ? 'fw-bold' : '' }}"
                                href="{{ url('/') }}">BERANDA</a></li>
                        {{-- <li><a class="text-white {{ Request::is('harga') ? 'fw-bold' : '' }}" href="{{ url('/harga') }}">HARGA</a></li> --}}
                        {{-- <li><a class="text-white {{ Request::is('about') ? 'fw-bold' : '' }}" href="{{ url('/about') }}">TENTANG KAMI</a></li> --}}
                        <a class="uk-navbar-toggle text-white" uk-search-icon
                            uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                    @endif
                @endauth
                @guest
                    <a href="{{ url('login') }}" class="mx-2">
                        <button class="uk-button"
                            style="background-color: #BD9354 !important; color: white !important">Login</button>
                    </a>
                    <a href="{{ url('register') }}">
                        <button class="uk-button"
                            style="background-color: #BD9354 !important; color: white !important">Register</button>
                    </a>
                @endguest

            </ul>
        </div>

        <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

            <div class="uk-navbar-item uk-width-expand">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input text-white" type="search" placeholder="Search..." autofocus>
                </form>
            </div>

            <a class="uk-navbar-toggle text-white" uk-close
                uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

        </div>

        <a class="m-4" style="width: 40px; color: white">
            @auth
                @if (Auth::user()->image)
                    <img style="border-radius: 50%;" src="{{ asset('images/' . Auth::user()->image) }}" alt="">
                @else
                    <img style="border-radius: 50%;" src="{{ asset('images/default.png') }}" alt="">
                @endif
            @endauth
        </a>
        <div uk-dropdown="pos: top-right; mode: click">
            <ul class="uk-nav uk-dropdown-nav">
                @auth
                    <li class="uk-nav-header">{{ Auth::user()->name }}</li>
                    @if (Auth::user()->hasRole('user'))
                        <li><a class="{{ Request::is('profil') ? 'fw-bold' : '' }}"
                                href="{{ url('/profil') }}">Profil</a>
                        </li>
                        <li><a class="{{ Request::is('riwayat') ? 'fw-bold' : '' }}"
                                href="{{ url('/riwayat') }}">Riwayat</a></li>
                        <li class="uk-nav-divider"></li>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button class="uk-button uk-button-danger mt-2">Logout</button>
                    </form>
                @endauth
            </ul>
        </div>

    </nav>
</div>
