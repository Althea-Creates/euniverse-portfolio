<nav class="navbar navbar-expand-lg navbar-light bgHeader">
    <div class="container-fluid">
        <!-- Logo -->
        {{-- <a class="navbar-brand" href="/">
            <img src="asset/euniverselogo5.png" alt="Logo" width="80" height="auto" class="d-inline-block align-top">
        </a> --}}
        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('writings') ? 'active' : '' }}" href="/writings">Writings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('projects') ? 'active' : '' }}" href="/projects">Projects</a>
                </li>
            </ul>
        </div>
    </div>
</nav>