<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditMatkulRequest;
use App\Http\Requests\TambahMatkulRequest;
use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    //

    public function index(){
        $data = Matkul::with("mahasiswa")->get();
        return view("matkul.data-matkul", ["data" => $data->sortDesc(), "jumlahMatkul" => $data->count()]);
    }

    public function tambahMatkulPage(){
        return view("matkul.tambah-matkul");
    }

    public function tambahMatkulAction(TambahMatkulRequest $request){
       $request->only(['nama', 'sks', 'semester', 'tahun' ]);

       $matkul = Matkul::where("nama", "=", $request->input("nama"))->get();
       if($matkul->count() != 0){
           return redirect()->route("matkul.data.page")->with(["status-gagal" => "Data matkul sudah terdaftar", "idMatkulTerdaftar" => $matkul[0]->id]);
       }
       $data = $request->validated();
       $status = Matkul::create($data);

       if($status){
           return redirect()->route("matkul.data.page")->with(["status" => "Data matkul berhasil ditambahkan", "idDataBaru" => $status->id]);
       }

       
    }

    public function editMatkulPage(Matkul $id){
        return view("matkul.edit-matkul", ["dataMatkul" => $id]);
    }

    public function editMatkulAction(EditMatkulRequest $request, $id){
        $request->only(['nama', 'sks', 'semester', 'tahun' ]);

        $request->validated();

        $status = Matkul::find($id)->update([
            "nama" => $request->input("nama"),
            "sks" => $request->input("sks"),
            "semester" => $request->input("semester"),
            "tahun" => $request->input("tahun")
        ]);

        if($status){
            return redirect()->route("matkul.data.page")->with(["status" => "Data matkul berhasil diperbarui"]);
        }
    }


    public function hapusMatkul($id){
        $status = Matkul::find($id)->delete();
        if($status){
            return redirect()->route("matkul.data.page")->with(["status" => "Data matkul berhasil dihapus"]);
        }
    }


}
