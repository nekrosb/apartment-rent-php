<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rentzilla - Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .register-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }

        .left-panel {
            background: #ffffff;
            padding: 60px;
        }

        .right-panel {
            background: linear-gradient(135deg, #0f172a, #1f2937, #2563eb);
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

<body class="d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
<x-navbar />
    <!-- FULL CENTER FIX (same as login) -->
    <main class="flex-grow-1 d-flex align-items-center justify-content-center py-5">

        <div class="card register-card shadow-lg w-100" style="max-width: 1000px;">

            <div class="row g-0">

                <!-- LEFT -->
                <div class="col-lg-6">

                    <div class="left-panel">

                        <div class="text-center mb-4">

                            <div class="logo mb-2">
                                Rentzilla
                            </div>

                            <p class="text-muted">
                                Create your account and start renting apartments instantly
                            </p>

                        </div>

                        <form method="POST" action="{{ route('register') }}">

                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                            
                            @csrf
                            

                            <div class="mb-3">
                                <label class="form-label" for="name">Username</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="your_nickname">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="you@example.com">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Create password">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Repeat password">
                            </div>

                            <div class="mb-3">

                                <input type="checkbox" name="terms" id="terms" required>
                                <label class="form-label" for="terms">
                                    I agree to <a href="/terms">Terms & Conditions</a>
                                </label>
                            </div>

                            <button class="btn btn-rentzilla w-100 text-white">
                                Create Account
                            </button>

                            <div class="text-center mt-3">
                                <small>
                                    Already have an account?
                                    <a href="/login">Sign in</a>
                                </small>
                            </div>

                        </form>

                    </div>

                </div>

                <!-- RIGHT -->
                <div class="col-lg-6">

                    <div class="right-panel">

                        <h2 class="fw-bold mb-3">
                            Join Rentzilla today
                        </h2>

                        <p class="mb-4">
                            Start exploring verified apartments and homes for rent.
                        </p>

                        <ul class="list-unstyled">
                            <li class="mb-3">✔ Fast registration</li>
                            <li class="mb-3">✔ Verified listings</li>
                            <li class="mb-3">✔ Secure platform</li>
                            <li class="mb-3">✔ 24/7 support</li>
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
            <small class="text-muted">© 2026 Rentzilla. All rights reserved.</small>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>