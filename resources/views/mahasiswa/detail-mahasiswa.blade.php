@include('templates.form', ['halaman' => 'mahasiswa', 'title' => 'Detail Mahasiswa'])
<div class="page-wrapper">
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <form class="card" style="width: 70%; margin: auto;">
                        {{-- @csrf --}}
                        {{-- {{ $kelas[0]->id }} --}}
                        <div class="card-body">
                            <h3 class="card-title">Detail Mahasiswa</h3>
                            <div class="row row-cards">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">NIM</label>
                                        <input type="text" disabled class="form-control" placeholder="231351XXX"
                                            value="{{ $data[0]->nim }}" name="nim">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" disabled class="form-control"
                                            placeholder="Nama Lengkap Mahasiswa" value="{{ $data[0]->nama }}"
                                            name="nama">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <input type="text" disabled class="form-control"
                                            placeholder="Nama Lengkap Mahasiswa"
                                            value="{{ $data[0]->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}"
                                            name="nama">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kelas</label>
                                        <input type="text" disabled class="form-control"
                                            placeholder="Nama Lengkap Mahasiswa" value="{{ $data[0]->kelas->nama }}"
                                            name="nama">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('templates.footer')
