<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rentzilla - Reset Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .reset-card {
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
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Apartments</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            </ul>
        </div>

    </div>
</nav>

<!-- MAIN -->
<main class="flex-grow-1 d-flex align-items-center justify-content-center py-5">

    <div class="card reset-card shadow-lg w-100" style="max-width: 1000px;">

        <div class="row g-0">

            <!-- LEFT -->
            <div class="col-lg-6">

                <div class="left-panel">

                    <div class="text-center mb-4">

                        <div class="logo mb-2">
                            Rentzilla
                        </div>

                        <p class="text-muted">
                            Set your new password to regain access to your account
                        </p>

                    </div>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <!-- Password reset token -->
                        <input type="hidden" name="token" value="{{ $token }}">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input id="email" type="email" name="email"
                                   class="form-control"
                                   value="{{ old('email', $email ?? '') }}"
                                   placeholder="you@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">New Password</label>
                            <input id="password" type="password" name="password"
                                   class="form-control"
                                   placeholder="Enter new password" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                   class="form-control"
                                   placeholder="Repeat new password" required>
                        </div>

                        <button class="btn btn-rentzilla w-100 text-white">
                            Reset Password
                        </button>

                        <div class="text-center mt-3">
                            <small>
                                Remember your password?
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
                        Secure your account
                    </h2>

                    <p class="mb-4">
                        Create a strong password to keep your Rentzilla account safe.
                    </p>

                    <ul class="list-unstyled">
                        <li class="mb-3">✔ Use at least 8 characters</li>
                        <li class="mb-3">✔ Include numbers and symbols</li>
                        <li class="mb-3">✔ Avoid common passwords</li>
                        <li class="mb-3">✔ Keep it unique</li>
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