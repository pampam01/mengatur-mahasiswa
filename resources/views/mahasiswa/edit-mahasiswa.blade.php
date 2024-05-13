@include('templates.form', ['halaman' => 'mahasiswa', 'title' => 'Edit Mahasiswa'])
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
                    <form class="card" action="{{ route('mahasiswa.edit.action', ['id' => $data->id]) }}" method="post"
                        autocomplete="off">
                        @csrf
                        {{-- {{ $kelas[0]->id }} --}}
                        <div class="card-body">
                            <h3 class="card-title">Edit Mahasiswa</h3>
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">NIM</label>
                                        @error('nim')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="text" class="form-control" placeholder="231351XXX"
                                            value="{{ $data->nim }}" name="nim">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        @error('nama')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <input type="text" class="form-control" placeholder="Nama Lengkap Mahasiswa"
                                            value="{{ $data->nama }}" name="nama">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        @error('jenis_kelamin')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <select type="text" class="form-select" id="select-optgroups"
                                            value="{{ $data->jenis_kelamin }}" name="jenis_kelamin">
                                            <optgroup label="Jenis Kelamin">
                                                <option value="L" @selected($data->jenis_kelamin == 'L')>Laki-laki</option>
                                                <option value="P" @selected($data->jenis_kelamin == 'P')>Perempuan</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kelas</label>
                                        @error('id_kelas')
                                            <p class="notif-validasi">* {{ $message }}</p>
                                        @enderror
                                        <select type="text" class="form-select" id="select-optgroups" name="id_kelas"
                                            name="id_kelas">
                                            <optgroup label="Pagi">
                                                @foreach ($kelasPagi as $pagi)
                                                    <option value="{{ $pagi->id }}" @selected($pagi->id == $data->id_kelas)>
                                                        {{ $pagi->nama }}
                                                    </option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="Malam">
                                                @foreach ($kelasMalam as $malam)
                                                    <option value="{{ $malam->id }}" @selected($malam->id == $data->id_kelas)>
                                                        {{ $malam->nama }}
                                                    </option>
                                                    {{-- <option value="">{{ $kelas[0]->id }}</option> --}}
                                                @endforeach
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
