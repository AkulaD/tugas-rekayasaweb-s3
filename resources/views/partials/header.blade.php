<nav class="navbar fixed-top border-bottom bg-white navbar-expand-lg py-1">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.jpg') }}" alt="A-1 Pictures Logo" height="45" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-lg-3">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active fw-bold' : '' }} text-muted">HOME</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/project') }}" class="nav-link {{ Request::is('project') ? 'active fw-bold' : '' }} text-muted">PROJECT</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/special') }}" class="nav-link {{ Request::is('special') ? 'active fw-bold' : '' }} text-muted">EVENT</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/about') }}" class="nav-link {{ Request::is('about') ? 'active fw-bold' : '' }} text-muted">ABOUT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>