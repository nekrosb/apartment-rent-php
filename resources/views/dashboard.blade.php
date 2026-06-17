<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentzilla - Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .profile-card {
            border: none;
            border-radius: 20px;
            padding: 30px;
            background: #fff;
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            background: #e5e7eb;
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

        .stat-card {
            border: none;
            border-radius: 18px;
            padding: 25px;
            transition: 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

<!-- NAVBAR -->
<x-navbar />
<main class="flex-grow-1 py-5">

    <div class="container">

        <!-- PROFILE SECTION -->
        <div class="profile-card shadow-sm mb-5">

            <div class="row align-items-center">

                <!-- AVATAR + INFO -->
                <div class="col-md-8 d-flex align-items-center">

                    <img class="avatar me-3"
                         src="https://i.pinimg.com/originals/cf/46/d3/cf46d3d8c429241d1ec960a7d76b8fe5.jpg"
                         alt="avatar">

                    <div>
                        <h4 class="mb-1 fw-bold">
                            {{ Auth::user()->name }}
                        </h4>

                        <!-- потом заменишь на реальные поля -->
                        <p class="text-muted mb-1">
                            User of Rentzilla platform
                        </p>

                        <p class="text-muted mb-0">
                            Active renter • Verified account • Member since 2026
                        </p>
                    </div>

                </div>

                <!-- ACTIONS -->
                <div class="col-md-4 text-md-end mt-3 mt-md-0">

                    <a href="/profile/edit" class="btn-rentzilla mb-2">
                        Edit Profile
                    </a>
                    <br>
                    <a href="/profile/email" class="text-decoration-none d-block mt-2">
                        Change Email
                    </a>
                    <a href="/profile/password" class="text-decoration-none d-block">
                        Change Password
                    </a>

                </div>

            </div>

        </div>

        <!-- STATS / CARDS -->
        <h4 class="section-title">Your activity</h4>

        <div class="row g-4">

            <!-- RESERVED -->
            <div class="col-lg-4 col-md-6">

                <div class="card stat-card shadow-sm h-100">
                    <h5 class="fw-bold mb-2">Reserved Apartments</h5>
                    <p class="text-muted">
                        Apartments you have booked or reserved for future stay.
                    </p>

                    <a href="/dashboard/reservations" class="btn-rentzilla mt-auto">
                        View Reservations
                    </a>
                </div>

            </div>

            <!-- LIKED -->
            <div class="col-lg-4 col-md-6">

                <div class="card stat-card shadow-sm h-100">
                    <h5 class="fw-bold mb-2">Liked Listings</h5>
                    <p class="text-muted">
                        Apartments and offers you saved to favorites.
                    </p>

                    <a href="/dashboard/favorites" class="btn-rentzilla mt-auto">
                        View Favorites
                    </a>
                </div>

            </div>

            <!-- MY LISTINGS -->
            <div class="col-lg-4 col-md-6">

                <div class="card stat-card shadow-sm h-100">
                    <h5 class="fw-bold mb-2">My Apartments</h5>
                    <p class="text-muted">
                        Properties you have listed for rent.
                    </p>

                    <a href="/dashboard/my-listings" class="btn-rentzilla mt-auto">
                        View Listings
                    </a>
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