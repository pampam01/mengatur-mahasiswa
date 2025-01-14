<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UTS | {{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/svg/school.svg') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('storage/custom/main.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">UTS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ ($halaman == 'mahasiswa' ? route('mahasiswa.data.page') : $halaman == 'kelas') ? route('kelas.data.page') : route('matkul.data.page') }}">
                            <i class="bi bi-arrow-left-circle"></i> Kembali
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-4">
        <h1 class="mb-4">{{ $title }}</h1>
        <!-- Content goes here -->
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
