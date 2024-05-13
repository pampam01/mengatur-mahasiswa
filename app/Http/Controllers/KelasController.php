<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditKelasRequest;
use App\Http\Requests\TambahKelasRequest;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KelasController extends Controller
{
    public function index(){
        $datas = Kelas::with("mahasiswa")->get();

        return view("kelas.data-kelas", ["datas" => $datas->sortBy("nama"), "jumlahData" => $datas->count()]);
    }

    public function tambahKelasPage(){
        return view("kelas.tambah-kelas");
    }

    public function tambahKelasAction(TambahKelasRequest $request){
        $request->only((["nama", "dosen_wali","waktu_pembelajaran"]));

        $kelas = Kelas::where("nama", "=", $request->input("nama"))->get();
        if($kelas->count() != 0){
            return redirect()->route("kelas.data.page")->with(["status-gagal" => "Data kelas sudah terdaftar", "idKelasTerdaftar" => $kelas[0]->id]);
        }

        $data = $request->validated();
        $status = Kelas::create($data);

        if($status){
            return redirect()->route("kelas.data.page")->with(["status" => "Data kelas berhasil ditambahkan", "idDataBaru" => $status->id]);
        }

    }

    public function editKelasPage(Kelas $id){
        return view("kelas.edit-kelas", ["dataKelas" => $id]);
    }

    public function editKelasAction(EditKelasRequest $request, $id){
        $request->only((["dosen_wali","waktu_pembelajaran"]));

        $request->validated();

        $status = Kelas::find($id)->update([
            "dosen_wali" => $request->input("dosen_wali"),
            "waktu_pembelajaran" => $request->input("waktu_pembelajaran")
        ]);

        if($status){
            return redirect()->route("kelas.data.page", ["id" => $id])->with(["status" => "Data kelas berhasil diperbarui"]);
        }

    }

    public function detailKelas($id){

        if(is_null(Kelas::find($id))){
            abort(404);
        }

        $kelas = Kelas::find($id);
        $mahasiswa = $kelas->mahasiswa()->get();
        return view("kelas.detail-kelas", ["kelas" => $kelas, "mahasiswa" => $mahasiswa, "jumlahMahasiswa" => $mahasiswa->count()]);
    }

    public function hapusKelas($id){
        $jumlahMahasiswa = Kelas::find($id)->mahasiswa()->count();

        $kelas = Kelas::find($id);

        if($jumlahMahasiswa != 0){
            return redirect()->route("kelas.data.page")->with(["status-hapus-gagal" => "Kelas memiliki data mahasiswa", "idGagalHapus" => $kelas->id]);
        }
        $status = Kelas::find($id)->delete();
        return redirect()->route("kelas.data.page")->with(["status" => "Data kelas berhasil dihapus"]);
    }

    public function hapusAllMahasiswaByKelas($id){
        $status = Mahasiswa::where("id_kelas", "=", $id)->delete();
        $status2 = Kelas::find($id)->delete();

        return redirect()->route("kelas.data.page")->with(["status" => "Data mahasiswa dan kelas berhasil dihapus"]);
    }

    public function hapusMahasiswa($idKelas, $idMahasiswa){
        $data = Mahasiswa::where("id", "=", $idMahasiswa, "and", "id_kelas", "=", $idKelas)->get();
        $status = Mahasiswa::find($data[0]->id)->delete();

        return redirect()->route("kelas.detail.page", ["id" => $idKelas])->with(["status" => "Data mahasiswa berhasil dihapus"]);
    }
}