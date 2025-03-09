<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('assets/img/LogoDulinDiluk.png') }}" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Beranda</a></li>
                <li><a href="pages/Opentrip/index.html">Open Trip</a></li>
                <li><a href="{{ route('privatetrip.index') }}">Private Trip Package</a></li>
                <li><a href="#team">Rent Car</a></li>
                <li><a href="#team">Travel Post</a></li>
                <li><a href="#team">About</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <form class="search-form d-flex align-items-center" action="search.html" method="GET">
            <input type="text" name="q" placeholder="Cari..." class="form-control">
            <button type="submit" class="btn btn-light">
                <i class="bi bi-search"></i>
            </button>
        </form>

    </div>
</header>