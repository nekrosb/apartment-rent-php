<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 - Email Verification</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .verify-card {
            border: none;
            border-radius: 20px;
            padding: 35px;
            background: #fff;
            max-width: 650px;
            margin: auto;
        }

        .btn-rentzilla {
            background: #2563eb;
            border: none;
            border-radius: 12px;
            padding: 10px 14px;
            font-weight: 600;
            color: white;
            text-decoration: none;
            display: inline-block;
        }

        .btn-rentzilla:hover {
            background: #1d4ed8;
            color: #fff;
        }

        .link-muted {
            color: #6b7280;
            text-decoration: none;
        }

        .link-muted:hover {
            color: #111827;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

<x-navbar />

<main class="flex-grow-1 d-flex align-items-center py-5">

    <div class="container">

        <div class="verify-card shadow-sm text-center">

            <h3 class="fw-bold mb-3">
                Verify your email address
            </h3>

            <p class="text-muted mb-4">
                Thanks for signing up! Before getting started, please verify your email by clicking the link we just sent you.
                If you didn’t receive it, you can resend it below.
            </p>

            {{-- STATUS MESSAGE --}}
            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success">
                    A new verification link has been sent to your email address.
                </div>
            @endif

            {{-- RESEND EMAIL --}}
            <form method="POST" action="{{ route('verification.send') }}" class="mb-3">
                @csrf

                <button type="submit" class="btn-rentzilla w-100">
                    Resend Verification Email
                </button>
            </form>

            {{-- LOGOUT --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-link link-muted">
                    Log Out
                </button>
            </form>

        </div>

    </div>

</main>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <div class="container">
        <p class="mb-1 fw-bold">Rentzilla</p>
        <small class="text-muted">© 2026 Rentzilla. All rights reserved.</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>