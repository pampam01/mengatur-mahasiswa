@include('templates.form', ['halaman' => 'kelas', 'title' => 'Detail Kelas'])
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
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
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Kelas
                    </div>
                    <h2 class="page-title">
                        {{ $kelas->nama }}
                    </h2>
                </div>
                {{-- <div class="col">
                    <div class="page-pretitle">
                        DOSEN WALI :
                    </div>
                    <div class="page-pretitle">
                        JUMLAH MAHASISWA :
                    </div>
                </div> --}}
            </div>
            <div class="row g-2 align-items-center mt-3">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        DOSEN WALI :
                        <span class="text-primary">{{ $kelas->dosen_wali }}</span>
                    </div>
                    <div class="page-pretitle">
                        JUMLAH MAHASISWA : <span class="text-primary">{{ $jumlahMahasiswa }}</span>
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
                    <a href="{{ route('mahasiswa.tambah.page') }}">Tambah Data <svg xmlns="http://www.w3.org/2000/svg"
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
                            <table class="table table-vcenter card-table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NIM</th>
                                        <th>NAMA</th>
                                        <th>JENIS KELAMIN</th>
                                        {{-- <th>KELAS</th> --}}
                                        <th class="w-1" colspan="3" style="text-align: center;">#
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswa as $mhs)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mhs->nim }}</td>
                                            <td class="text-secondary">
                                                {{ $mhs->nama }}
                                            </td>
                                            <td class="text-secondary"><a href="#"
                                                    class="text-reset">{{ $mhs->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</a>
                                            </td>
                                            {{-- <td class="text-secondary">
                                                {{ $kelas->nama }}
                                            </td> --}}
                                            <td class="btn-aksi">
                                                <a href="{{ route('mahasiswa.detail.page', ['id' => $mhs->id]) }}"
                                                    title="detail data"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-zoom-scan">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                                                        <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                                                        <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                                                        <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                                                        <path d="M8 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                        <path d="M16 16l-2.5 -2.5" />
                                                    </svg></a>
                                            </td>
                                            <td class="btn-aksi">
                                                <a href="{{ route('mahasiswa.edit.page', ['id' => $mhs->id]) }}"
                                                    title="edit data"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="#664b00" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit-circle">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                                                        <path d="M16 5l3 3" />
                                                        <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6" />
                                                    </svg></a>
                                            </td>
                                            <td class="btn-aksi">
                                                <a href="#" title="hapus data" data-bs-toggle="modal"
                                                    data-bs-target="#modal-small" data-id="{{ $mhs->id }}"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="#940000"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg></a>
                                            </td>
                                        </tr>
                                        <div class="modal modal-blur fade" id="modal-small" tabindex="-1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="modal-title">Apakah anda yakin ingin menghapus?
                                                        </div>
                                                        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dignissimos,
                                                            quia.</div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="btn btn-link link-secondary me-auto"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <a href="#" id="deleteBtn"><button type="button"
                                                                class="btn btn-danger" data-bs-dismiss="modal">Ya,
                                                                hapus data tersebut</button></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </tbody>
                            </table>
                            @if ($jumlahMahasiswa == 0)
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
                    deleteBtn.setAttribute('href', 'mahasiswa/' + deleteId + '/hapus');

                    myModal.show(); // Menampilkan modal
                });
            });
        });
    </script>
    @include('templates.footer')
