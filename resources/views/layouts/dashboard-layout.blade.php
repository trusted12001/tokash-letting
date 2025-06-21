<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard | TOKASH Letting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Reuse existing styles for consistency -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="{{ route('dashboard') }}">TOKASH Letting</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

    @auth

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Actions
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Manage Properties</a></li>
                        <li><a class="dropdown-item" href="#">Manage Users</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Edit Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Change Password</a></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="nav-link btn btn-link text-white" type="submit">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>

    @endauth

    </header>

    <main class="container my-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        &copy; {{ date('Y') }} TOKASH Letting. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
