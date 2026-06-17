<style>
    .navbar-rentzilla {
        background: #111827;
    }

    .navbar-rentzilla .nav-link {
        color: #cbd5e1 !important;
        font-weight: 500;
    }

    .navbar-rentzilla .nav-link:hover {
        color: #ffffff !important;
    }

    .btn-rentzilla-nav {
        background: #2563eb;
        border: none;
        border-radius: 10px;
        padding: 8px 14px;
        font-weight: 600;
        color: white !important;
    }

    .btn-rentzilla-nav:hover {
        background: #1d4ed8;
        color: white !important;
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-rentzilla shadow-sm py-3">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand fw-bold" href="/">
            🏡 Rentzilla
        </a>

        <!-- BURGER -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#rentzillaNav"
                aria-controls="rentzillaNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="rentzillaNav">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                <!-- HOME (always visible) -->
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                                    <li class="nav-item">
                        <a class="nav-link" href="/apartments">Apartments</a>
                    </li>


                @auth


                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-rentzilla-nav ms-lg-2" href="{{ route('listing') }}">
                            + Create booking
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link text-white p-0">
                                Logout
                            </button>
                        </form>
                    </li>

                @endauth

                @guest

                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-rentzilla-nav ms-lg-2" href="/register">
                            Sign Up
                        </a>
                    </li>

                @endguest

            </ul>

        </div>
    </div>
</nav>