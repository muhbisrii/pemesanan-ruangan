<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff5f5; /* merah lembut */
        }
        .navbar {
            background-color: #8B0000; /* merah elegan */
        }
        .navbar-brand, .nav-link, h1, h2, h3, h4, h5 {
            color: white !important;
        }
        .btn-primary {
            background-color: #B22222;
            border-color: #B22222;
        }
        .btn-primary:hover {
            background-color: #8B0000;
            border-color: #8B0000;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('bookings.index') }}">Pemesanan Ruangan</a>
        </div>
    </nav>

    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
