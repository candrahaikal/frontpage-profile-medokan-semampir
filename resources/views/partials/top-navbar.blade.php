<header id="header" class="header d-flex align-items-center fixed-top">
    <div
        class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Medokan Semampir</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home.index') }}"
                        class="{{ Route::currentRouteName() == 'home.index' ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('about.index') }}"
                        class="{{ Route::currentRouteName() == 'about.index' ? 'active' : '' }}">Struktural</a></li>
                <li><a href="{{ route('facility.index') }}"
                        class="{{ Route::currentRouteName() == 'facility.index' || Route::currentRouteName() == 'facility.show' ? 'active' : '' }}">Fasilitas</a>
                </li>
                <li><a href="{{ route('umkm.index') }}"
                        class="{{ Route::currentRouteName() == 'umkm.index' || Route::currentRouteName() == 'umkm.show' ? 'active' : '' }}">UMKM</a>
                </li>
                <li><a href="{{ route('event.index') }}"
                        class="{{ Route::currentRouteName() == 'event.index' || Route::currentRouteName() == 'event.show' ? 'active' : '' }}">Kegiatan</a>
                </li>

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        {{-- <a class="btn-getstarted" href="index.html#about">Get Started</a> --}}

    </div>
</header>
