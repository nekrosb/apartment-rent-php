<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rentzilla - Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .login-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }

        .left-panel {
            background: #ffffff;
            padding: 60px;
        }

        .right-panel {
            background: linear-gradient(135deg, #111827, #1f2937, #2563eb);
            color: white;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
        }

        .btn-rentzilla {
            background: #2563eb;
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
        }

        .btn-rentzilla:hover {
            background: #1d4ed8;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            color: #2563eb;
        }
    </style>
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                🏡 Rentzilla
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Apartments</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Favorites</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- LOGIN SECTION -->
    <main class="container flex-grow-1 d-flex align-items-center justify-content-center py-5">

        <div class="card login-card shadow-lg w-100" style="max-width: 1000px;">

            <div class="row g-0">

                <!-- LEFT -->
                <div class="col-lg-6">

                    <div class="left-panel">

                        <div class="text-center mb-4">

                            <div class="logo mb-2">
                                Rentzilla
                            </div>

                            <p class="text-muted">
                                Sign in to manage your apartments and bookings
                            </p>

                        </div>

                        <form>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="you@example.com">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter password">
                            </div>

                            <div class="d-flex justify-content-between mb-4">

                                <div>
                                    <input type="checkbox">
                                    <small>Remember me</small>
                                </div>

                                <a href="#" class="text-decoration-none">
                                    Forgot password?
                                </a>

                            </div>

                            <button class="btn btn-rentzilla w-100 text-white">
                                Sign In
                            </button>

                            <div class="text-center mt-3">
                                <small>
                                    Don’t have an account?
                                    <a href="#">Sign up</a>
                                </small>
                            </div>

                        </form>

                    </div>

                </div>

                <!-- RIGHT -->
                <div class="col-lg-6">

                    <div class="right-panel">

                        <h2 class="fw-bold mb-3">
                            Find your perfect apartment
                        </h2>

                        <p class="mb-4">
                            Thousands of verified listings available across your city.
                        </p>

                        <ul class="list-unstyled">

                            <li class="mb-3">✔ Verified landlords</li>
                            <li class="mb-3">✔ Secure payments</li>
                            <li class="mb-3">✔ Smart search filters</li>
                            <li class="mb-3">✔ Instant booking</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-4 mt-auto">

        <div class="container">

            <p class="mb-1 fw-bold">Rentzilla</p>

            <small class="text-muted">
                © 2026 Rentzilla. All rights reserved.
            </small>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>