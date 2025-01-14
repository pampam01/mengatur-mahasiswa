@extends('templates.form', ['halaman' => 'mahasiswa', 'title' => 'Tambah Mahasiswa'])

<div class="container mt-5">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h2>Tambah Mahasiswa</h2>
        </div>
    </div>

    <!-- Form Tambah Mahasiswa -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('mahasiswa.tambah.action') }}" method="post" autocomplete="off">
                @csrf
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Form Tambah Mahasiswa</h5>

                        <!-- NIM -->
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                                name="nim" placeholder="231351XXX" value="{{ old('nim') }}">
                            @error('nim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nama Lengkap -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" name="nama" placeholder="Nama Lengkap Mahasiswa"
                                value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                                name="jenis_kelamin">
                                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Kelas -->
                        <div class="mb-3">
                            <label for="id_kelas" class="form-label">Kelas</label>
                            <select class="form-select @error('id_kelas') is-invalid @enderror" id="id_kelas"
                                name="id_kelas">
                                <optgroup label="Pagi">
                                    @if ($kelasPagi->isEmpty())
                                        <option disabled>Tidak ada kelas pagi</option>
                                    @else
                                        @foreach ($kelasPagi as $pagi)
                                            <option value="{{ $pagi->id }}"
                                                {{ old('id_kelas') == $pagi->id ? 'selected' : '' }}>
                                                {{ $pagi->nama }}
                                            </option>
                                        @endforeach
                                    @endif
                                </optgroup>
                                <optgroup label="Malam">
                                    @if ($kelasMalam->isEmpty())
                                        <option disabled>Tidak ada kelas malam</option>
                                    @else
                                        @foreach ($kelasMalam as $malam)
                                            <option value="{{ $malam->id }}"
                                                {{ old('id_kelas') == $malam->id ? 'selected' : '' }}>
                                                {{ $malam->nama }}
                                            </option>
                                        @endforeach
                                    @endif
                                </optgroup>
                            </select>
                            @error('id_kelas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Mata Kuliah -->
                        <div class="mb-3">
                            <label for="id_matkul" class="form-label">Mata Kuliah</label>
                            <select class="form-select @error('id_matkul') is-invalid @enderror" id="id_matkul"
                                name="id_matkul">
                                <option value="">Pilih Mata Kuliah</option>
                                @foreach ($matkul as $m)
                                    <option value="{{ $m->id }}"
                                        {{ old('id_matkul') == $m->id ? 'selected' : '' }}>
                                        {{ $m->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_matkul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <!-- Form Footer -->
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <a href="{{ route('mahasiswa.data.page') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

@include('templates.footer')
