<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>UTS | {{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/svg/school.svg') }}" type="image/x-icon">
    <!-- CSS files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .navbar-brand img {
            width: 100px;
        }

        .nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }

        .dropdown-menu {
            min-width: 10rem;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href=".">
                <img src="{{ asset('/img/download.svg') }}" alt="Logo">
                <span class="ms-2 fw-bold"><i>UTS</i></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $halaman == 'beranda' ? 'active' : '' }}"
                            href="{{ route('beranda.page') }}">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $halaman == 'mahasiswa' ? 'active' : '' }}"
                            href="{{ route('mahasiswa.data.page') }}">
                            Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $halaman == 'kelas' ? 'active' : '' }}"
                            href="{{ route('kelas.data.page') }}">
                            Kelas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $halaman == 'matkul' ? 'active' : '' }}"
                            href="{{ route('matkul.data.page') }}">
                            Mata Kuliah
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
