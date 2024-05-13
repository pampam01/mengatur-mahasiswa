@include('templates.form', ['halaman' => 'mahasiswa', 'title' => 'Tambah Mahasiswa'])
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
            <div class="row row-cards">
                <div class="col-12">
                    <form class="card" action="{{ route('mahasiswa.tambah.action') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Tambah Mahasiswa</h3>
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">NIM</label>
                                        @error('nim')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="text" class="form-control" placeholder="231351XXX"
                                            name="nim" value="{{ old('nim') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        @error('nama')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="text" class="form-control" placeholder="Nama Lengkap Mahasiswa"
                                            name="nama" value="{{ old('nama') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        @error('jenis_kelamin')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <select type="text" class="form-select" id="select-optgroups" value=""
                                            name="jenis_kelamin">
                                            <optgroup label="Jenis Kelamin">
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kelas</label>
                                        <select type="text" class="form-select" id="select-optgroups" value=""
                                            name="id_kelas">
                                            <optgroup label="Pagi">
                                                @foreach ($kelasPagi as $pagi)
                                                    <option value="{{ $pagi->id }}">{{ $pagi->nama }}</option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="Malam">
                                                @foreach ($kelasMalam as $malam)
                                                    <option value="{{ $malam->id }}">{{ $malam->nama }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
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
