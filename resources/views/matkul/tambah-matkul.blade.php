@include('templates.form', ['halaman' => 'matkul', 'title' => 'Tambah matkul'])
<div class="page-wrapper">
    <!-- Page header -->
    {{-- <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Tambah Mahasiswa
                    </h2>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            @if (Session::has('status-gagal'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 8v4" />
                                <path d="M12 16h.01" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="alert-title">Gagal menambahkan data matkul</h4>
                            <div class="text-secondary">{{ Session::get('status-gagal') }}</div>
                        </div>
                    </div>
                    <a class="btn-close mt-2" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif
            <div class="row row-cards">
                <div class="col-12">
                    <form class="card" method="post" action="{{ route('matkul.tambah.action') }}" autocomplete="off">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Tambah Matkul</h3>
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Matkul</label>
                                        @error('nama')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="text" class="form-control" placeholder="pemrograman"
                                            name="nama">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10">
                                    <div class="mb-3">
                                        <label class="form-label">jumlah sks</label>
                                        @error('sks')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="number" class="form-control" placeholder="2" name="sks">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-10">
                                    <div class="mb-3">
                                        <label class="form-label">semester</label>
                                        @error('smester')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="number" class="form-control" placeholder="1" name="semester">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10">
                                    <div class="mb-3">
                                        <label class="form-label">tahun</label>
                                        @error('tahun')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="number" class="form-control" placeholder="2024" name="tahun">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('templates.footer')
