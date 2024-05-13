@include('templates.header', ['halaman' => 'kelas', 'title' => 'Kelas'])
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            {{-- ALERT SUKSES --}}
            @if (Session::has('status'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l5 5l10 -10" />
                            </svg>
                        </div>
                        <div>
                            {{ Session::get('status') }}
                        </div>
                    </div>
                    <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif
            @if (Session::has('status-gagal'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 8v4" />
                                <path d="M12 16h.01" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="alert-title">Operasi gagal</h4>
                            <div class="text-secondary">{{ Session::get('status-gagal') }}</div>
                        </div>
                    </div>
                    <a class="btn-close mt-2" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif
            @if (Session::has('status-hapus-gagal'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 8v4" />
                                <path d="M12 16h.01" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="alert-title">Operasi gagal</h4>
                            <div class="text-secondary">{{ Session::get('status-hapus-gagal') }},
                                @if (Session::has('idGagalHapus'))
                                    <a
                                        href="{{ route('mahasiswa.kelas.hapus', ['id' => Session::get('idGagalHapus')]) }}">Hapus</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <a class="btn-close mt-2" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Halaman
                    </div>
                    <h2 class="page-title">
                        Data Kelas
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        {{-- <span class="d-none d-sm-inline">
                            <a href="#" class="btn">
                                New view
                            </a>
                        </span> --}}
                        <a href="{{ route('kelas.tambah.page') }}" class="btn d-none d-sm-inline-block"
                            style="background-color:#003356 ; color: white;">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah data
                        </a>
                        <a href="{{ route('kelas.tambah.page') }}" class="btn d-sm-none btn-icon"
                            aria-label="Create new report" style="background-color:#003356 ; color: white;">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                {{-- <div class="tambah-btn">
                    <a href="{{ route('kelas.tambah.page') }}">Tambah Data <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg></a>
                </div> --}}
                <div class="col-12">
                    <div class="card">

                        <div class="table-responsive">
                            <table class="table table-vcenter card-table table-striped display" id="example"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA KELAS</th>
                                        <th>DOSEN WALI</th>
                                        <th>JUMLAH</th>
                                        <th>WAKTU PEMBELAJARAN</th>
                                        <th class="w-1" colspan="3" style="text-align: center">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $dt)
                                        <tr>
                                            <td class="text-secondary">{{ $loop->iteration }}
                                                @if (Session::has('idDataBaru'))
                                                    @if (Session::get('idDataBaru') == $dt->id)
                                                        <span class="badge bg-blue text-blue-fg ms-2">Baru</span>
                                                    @endif
                                                @endif
                                                @if (Session::has('idKelasTerdaftar'))
                                                    @if (Session::get('idKelasTerdaftar') == $dt->id)
                                                        <span
                                                            class="badge bg-orange text-blue-fg ms-2">Terdaftar</span>
                                                    @endif
                                                @endif
                                            </td>
                                            <td class="text-secondary">{{ $dt->nama }}</td>
                                            <td class="text-secondary">{{ $dt->dosen_wali }}</td>
                                            <td class="text-secondary">{{ $dt->mahasiswa->count() }} Mahasiswa</td>
                                            <td class="text-secondary">
                                                @if ($dt->waktu_pembelajaran == 'P')
                                                    Pagi
                                                @else
                                                    Malam
                                                @endif
                                            </td>
                                            <td class="btn-aksi">
                                                <a href="{{ route('kelas.detail.page', ['id' => $dt->id]) }}"
                                                    title="detail data"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="#003c8a" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                        <path d="M12 9h.01" />
                                                        <path d="M11 12h1v4h1" />
                                                    </svg></a>
                                            </td>
                                            <td class="btn-aksi">
                                                <a href="{{ route('kelas.edit.page', ['id' => $dt->id]) }}"
                                                    title="edit data"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="#8a5700" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                                        <path d="M13.5 6.5l4 4" />
                                                    </svg></a>
                                            </td>
                                            <td class="btn-aksi">
                                                <a href="#" title="hapus data" data-bs-toggle="modal"
                                                    data-id="{{ $dt->id }}" data-bs-target="#modal-small"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="#940000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>

                                                </a>
                                            </td>
                                        </tr>
                                        <div class="modal modal-blur fade" id="modal-small" tabindex="-1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="modal-title">Apakah anda yakin ingin
                                                            menghapus?
                                                        </div>
                                                        <div>Data yang telah dihapus tidak dapat dikembalikan.</div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="btn btn-link link-secondary me-auto"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <a href="#" id="deleteBtn">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Ya,
                                                                hapus data tersebut</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($jumlahData == 0)
                                <div class="tidak-ada-data">
                                    <img src="{{ asset('storage/svg/no-result.svg') }}" class="tanpa-data">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('modal-small'));

            // Menangkap event klik pada tombol hapus
            document.querySelectorAll('a[data-bs-toggle="modal"]').forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah link membuka halaman baru

                    var deleteId = link.getAttribute('data-id');
                    var modalFooter = myModal._element.querySelector('.modal-footer');

                    // Memperbarui href pada tombol hapus di footer modal
                    var deleteBtn = modalFooter.querySelector('#deleteBtn');
                    deleteBtn.setAttribute('href', 'kelas/' + deleteId + '/hapus');

                    myModal.show(); // Menampilkan modal
                });
            });
        });
    </script>
    @include('templates.footer')
