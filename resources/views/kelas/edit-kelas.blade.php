@include('templates.form', ['halaman' => 'kelas', 'title' => 'Edit Kelas'])
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
                            <h4 class="alert-title">Gagal menambahkan data kelas</h4>
                            <div class="text-secondary">{{ Session::get('status-gagal') }}</div>
                        </div>
                    </div>
                    <a class="btn-close mt-2" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif
            <div class="row row-cards">
                <div class="col-12">
                    <form class="card" method="post"
                        action="{{ route('kelas.edit.action', ['id' => $dataKelas->id]) }}" autocomplete="off">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Edit Kelas</h3>
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Kelas</label>
                                        @error('nama')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="text" readonly class="form-control" placeholder="Pagi|Malam X"
                                            value="{{ $dataKelas->nama }}" name="nama">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10">
                                    <div class="mb-3">
                                        <label class="form-label">Dosen Wali</label>
                                        @error('dosen_wali')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="text" class="form-control" placeholder="Nama Lengkap Dosen Wali"
                                            value="{{ $dataKelas->dosen_wali }}" name="dosen_wali">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Waktu Pembelajaran</label>
                                        @error('waktu_pembelajaran')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <select type="text" class="form-select" id="select-optgroups"
                                            value="{{ $dataKelas->waktu_pembelajaran }}" name="waktu_pembelajaran">
                                            <optgroup label="Waktu">
                                                <option value="P">Pagi</option>
                                                <option value="M">Malam</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('templates.footer')
