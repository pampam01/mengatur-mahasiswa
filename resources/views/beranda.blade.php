@include('templates.header', ['halaman' => 'beranda', 'title' => 'Beranda'])
<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-4">
                <!-- Kartu Mahasiswa -->
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="ribbon ribbon-top bg-warning text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 9h.01" />
                                <path d="M11 12h1v4h1" />
                            </svg>
                        </div>
                        <div class="card-body text-center">
                            <div class="icon-circle bg-primary mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    viewBox="0 0 24 24" fill="none" stroke="#fffafa" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>
                            </div>
                            <h5 class="card-title">Mahasiswa</h5>
                            <p class="text-muted mb-0">
                                <span class="fw-bold">{{ $jumlahMahasiswa }}</span> Mahasiswa
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Kartu Kelas -->
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="ribbon ribbon-top bg-warning text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 9h.01" />
                                <path d="M11 12h1v4h1" />
                            </svg>
                        </div>
                        <div class="card-body text-center">
                            <div class="icon-circle bg-success mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    viewBox="0 0 24 24" fill="none" stroke="#fffafa" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-chalkboard">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M8 19h-3a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v11a1 1 0 0 1 -1 1" />
                                    <path
                                        d="M11 16m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                </svg>
                            </div>
                            <h5 class="card-title">Kelas</h5>
                            <p class="text-muted mb-0">
                                <span class="fw-bold">{{ $jumlahKelas }}</span> Kelas
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates.footer')
