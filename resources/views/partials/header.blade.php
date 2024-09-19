<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Center nav items when collapsed */
        @media (max-width: 991.98px) {
            .navbar-nav {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bgHeader">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand href="/">
            <img src="asset/euniverselogo5.png" alt="Logo" width="100" height="auto" class="d-inline-block align-top">
        </a>        
        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    {{-- <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Projects</a> --}}
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Load jQuery first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Then load Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>