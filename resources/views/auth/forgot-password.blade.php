<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rentzilla - Forgot Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .forgot-card {
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

        </div>
    </nav>

    <!-- CONTENT -->
    <main class="container flex-grow-1 d-flex align-items-center justify-content-center py-5">

        <div class="card forgot-card shadow-lg w-100" style="max-width:1000px;">

            <div class="row g-0">

                <!-- LEFT SIDE -->
                <div class="col-lg-6">

                    <div class="left-panel">

                        <div class="text-center mb-4">

                            <div class="logo mb-2">
                                Rentzilla
                            </div>

                            <p class="text-muted">
                                Enter your email address and we'll send you a password reset link.
                            </p>

                        </div>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="form-label">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control"
                                    placeholder="you@example.com"
                                    required>
                            </div>

                            <button type="submit"
                                class="btn btn-rentzilla w-100 text-white">
                                Send Reset Link
                            </button>

                            <div class="text-center mt-3">

                                <small>
                                    Remember your password?
                                    <a href="{{ route('login') }}">
                                        Back to Login
                                    </a>
                                </small>

                            </div>

                        </form>

                    </div>

                </div>

                <!-- RIGHT SIDE -->
                <div class="col-lg-6">

                    <div class="right-panel">

                        <h2 class="fw-bold mb-3">
                            Reset your password securely
                        </h2>

                        <p class="mb-4">
                            We'll send a secure password reset link to your email address.
                        </p>

                        <ul class="list-unstyled">

                            <li class="mb-3">✔ Secure reset process</li>
                            <li class="mb-3">✔ One-time verification link</li>
                            <li class="mb-3">✔ Fast account recovery</li>
                            <li class="mb-3">✔ Protected user accounts</li>

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