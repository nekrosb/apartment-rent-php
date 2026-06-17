<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentzilla - Create Listing</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .form-card {
            border: none;
            border-radius: 20px;
            padding: 30px;
            background: #fff;
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

        .section-title {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control,
        .form-select {
            border-radius: 12px;
            padding: 10px 12px;
        }

        .upload-box {
            border: 2px dashed #cbd5e1;
            border-radius: 16px;
            padding: 25px;
            text-align: center;
            background: #f8fafc;
            cursor: pointer;
            transition: 0.2s;
        }

        .upload-box:hover {
            border-color: #2563eb;
            background: #eef2ff;
        }

        .hint-text {
            font-size: 13px;
            color: #6b7280;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

<!-- NAVBAR -->
<x-navbar />

<main class="flex-grow-1 py-5">

    <div class="container">

        <h4 class="section-title">Create new apartment listing</h4>

        <div class="form-card shadow-sm">

            <form action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif

                <!-- TITLE -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input id="title" name="title" type="text" class="form-control" placeholder="e.g. Modern studio in city center" required>
                </div>

                <!-- DESCRIPTION -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="5"
                              placeholder="Describe your apartment..." required></textarea>
                </div>

                <!-- ADDRESS -->
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input id="address" name="address" type="text" class="form-control" placeholder="Street, building number, etc." required>
                </div>

                <!-- CITY SELECT -->
                <div class="mb-3">
                    <label for="city_id" class="form-label">City</label>
                    <select id="city_id" name="city_id" class="form-select" required>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- PRICE -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price per night (CHF)</label>
                    <input id="price" name="price" type="number" class="form-control" placeholder="e.g. 120" required>
                </div>

                <div class="row">

                    <!-- ROOMS -->
                    <div class="col-md-6 mb-3">
                        <label for="bedrooms" class="form-label">Rooms</label>
                        <input id="bedrooms" name="bedrooms" type="number" class="form-control" placeholder="e.g. 2" required>
                    </div>

                    <!-- BATHROOMS -->
                    <div class="col-md-6 mb-3">
                        <label for="bathrooms" class="form-label">Bathrooms</label>
                        <input id="bathrooms" name="bathrooms" type="number" class="form-control" placeholder="e.g. 1"  required>
                    </div>

                </div>

                <!-- UPLOAD -->
                <div class="mb-4">
                    <label class="form-label">Photos</label>
                    <label for="photos" class="upload-box w-100">
                        <input id="photos" name="photos[]" type="file" multiple accept="image/png, image/jpeg, image/webp" required>
                        <div>
                            <strong>Click to upload</strong> or drag & drop images here
                            <div class="hint-text mt-2">
                                PNG, JPG, WEBP up to 10MB each
                            </div>
                        </div>
                    </label>
                </div>

                <!-- ACTIONS -->
                <div class="d-flex justify-content-end gap-2">

                    <a href="/dashboard" class="btn btn-light px-4">
                        Cancel
                    </a>

                    <button type="submit" class="btn-rentzilla">
                        Publish Listing
                    </button>

                </div>

            </form>

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