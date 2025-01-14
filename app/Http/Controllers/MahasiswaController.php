<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditMahasiswaRequest;
use App\Http\Requests\TambahMahasiswaRequest;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MahasiswaController extends Controller
{
    public function index(){
        $datas = Mahasiswa::with("kelas")->get();
        Log::info($datas);
        return view("mahasiswa.data-mahasiswa", ["mahasiswa" => $datas->sortDesc(), "jumlahMahasiswa" => $datas->count()]);
    }

    public function tambahMahasiswaPage(){

        $kelasPagi = Kelas::where("waktu_pembelajaran", "=", "P")->get();
        $kelasMalam = Kelas::where("waktu_pembelajaran", "=", "M")->get();
        $matkul = Matkul::with("mahasiswa")->get();
        

        return view("mahasiswa.tambah-mahasiswa", ["kelasPagi" => $kelasPagi->sortBy("nama"), "kelasMalam" => $kelasMalam->sortBy("nama"), "matkul" => $matkul]);
    }

    public function tambahMahasiswaAction(TambahMahasiswaRequest $request){

        $mahasiswa = Mahasiswa::where("nim", "=", $request->input("nim"))->get();


        if($mahasiswa->count() != 0){
            return redirect()->route("mahasiswa.data.page")->with(["status-gagal" => "Mahasiswa sudah tefdaftar", "idMahasiswaTerdaftar" => $mahasiswa[0]->id]);
        }

        $status = Mahasiswa::create($request->all());
        return redirect()->route("mahasiswa.data.page")->with(["status" => "Data mahasiswa berhasil ditambahkan", "idDataBaru" => $status->id]);
    }

    public function detailMahasiswa( $id){
        $jumlah = Mahasiswa::where("id", "=", $id)->count();
        if($jumlah == 0){
            abort(404);
        }

        $mahasiswa = Mahasiswa::where("id", "=", $id)->with("kelas")->get();
        // Log::info($mahasiswa);
        return view("mahasiswa.detail-mahasiswa", ["data" => $mahasiswa]);
    }

    public function editMahasiswaPage($id){
        $jumlah = Mahasiswa::where("id", "=", $id)->count();
        if($jumlah == 0){
            abort(404);
        }

        $mahasiswa = Mahasiswa::find($id);
        $kelas = $mahasiswa->kelas->get();
        $kelasPagi = Kelas::where("waktu_pembelajaran", "=", "P")->get();
        $kelasMalam = Kelas::where("waktu_pembelajaran", "=", "M")->get();
        return view("mahasiswa.edit-mahasiswa", ["data" => $mahasiswa, "kelasPagi" => $kelasPagi, "kelasMalam" => $kelasMalam, "kelas" => $kelas]);
    }

    public function editMahasiswaAction(EditMahasiswaRequest $request, $id){
        $jumlahMhs = Mahasiswa::where("nim", "=", $request->input("nim"));
        if($jumlahMhs->count() != 0){
            return redirect()->route("mahasiswa.data.page")->with(["status-gagal-edit" => "Mahasiswa sudah terdaftar"]);
        }


        $mhs = Mahasiswa::find($id)->update([
            "nim" => $request->input("nim"),
            "nama" => $request->input("nama"),
            "jenis_kelamin" => $request->input("jenis_kelamin"),
            "id_kelas" => $request->input("id_kelas"),
            "id_matkul" => $request->input("id_matkul")
        ]);

        return redirect()->route("mahasiswa.data.page")->with(["status" => "Data mahasiswa berhasil diperbarui"]);
    }

    public function hapusMahasiswa($id){
        $status = Mahasiswa::find($id)->delete();
        if($status){
            return redirect()->route("mahasiswa.data.page")->with(["status" => "Data mahasiswa berhasil dihapus"]);
        }
    }
}