<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Route;




Route::get("/", [BerandaController::class, "index"])->name("beranda.page");



Route::get("/mahasiswa", [MahasiswaController::class, "index"])->name("mahasiswa.data.page");

Route::get("/mahasiswa/tambah", [MahasiswaController::class, "tambahMahasiswaPage"])->name("mahasiswa.tambah.page");
Route::post("/mahasiswa/tambah", [MahasiswaController::class, "tambahMahasiswaAction"])->name("mahasiswa.tambah.action");

Route::get("/mahasiswa/{id}/detail", [MahasiswaController::class, "detailMahasiswa"])->name("mahasiswa.detail.page")->missing(function(){
    return response()->view("errors.404");
})->whereNumber("id");

Route::get("/mahasiswa/{id}/edit", [MahasiswaController::class, "editMahasiswaPage"])->name("mahasiswa.edit.page")->missing(function(){
    return response()->view("errors.404");
})->whereNumber("id");
Route::post("/mahasiswa/{id}/edit", [MahasiswaController::class, "editMahasiswaAction"])->name("mahasiswa.edit.action")->whereNumber("id");

Route::get("/mahasiswa/{id}/hapus", [MahasiswaController::class, "hapusMahasiswa"])->name("mahasiswa.hapus.action")->whereNumber("id");





Route::get("/kelas", [KelasController::class, "index"])->name("kelas.data.page");

Route::get("/kelas/tambah", [KelasController::class, "tambahKelasPage"])->name("kelas.tambah.page");
Route::post("/kelas/tambah", [KelasController::class, "tambahKelasAction"])->name("kelas.tambah.action");

Route::get("/kelas/{id}/edit", [KelasController::class, "editKelasPage"])->name("kelas.edit.page")->missing(function(){
    return response()->view("errors.404");
})->whereNumber("id");

Route::post("/kelas/{id}/edit", [KelasController::class, "editKelasAction"])->name("kelas.edit.action");

Route::get("/kelas/{id}/detail", [KelasController::class, "detailKelas"])->name("kelas.detail.page")->missing(function(){
    return response()->view("errors.404");
})->whereNumber("id");

Route::get("/kelas/{id}/hapus", [KelasController::class, "hapusKelas"])->name("kelas.data.hapus");

Route::get("/kelas/{idKelas}/mahasiswa/{idMahasiswa}/hapus", [KelasController::class, "hapusMahasiswa"])->name("mahasiswa.kelas.data.hapus")->missing(function(){
    return response()->view("errors.404");
})->whereNumber("id");

Route::get("/kelas/mahasiswa/{id}/hapus", [KelasController::class, "hapusAllMahasiswaByKelas"])->name("mahasiswa.kelas.hapus");

Route::get("/matkul", [MatkulController::class, "index"])->name("matkul.data.page");
Route::get("/matkul/tambah", [MatkulController::class, "tambahMatkulPage"])->name("matkul.tambah.page");
Route::post("/matkul/tambah", [MatkulController::class, "tambahMatkulAction"])->name("matkul.tambah.action");
Route::get("/matkul/{id}/edit", [MatkulController::class, "editMatkulPage"])->name("matkul.edit.page")->missing(function(){
    return response()->view("errors.404");
})->whereNumber("id");
Route::post("/matkul/{id}/edit", [MatkulController::class, "editMatkulAction"])->name("matkul.edit.action")->whereNumber("id");
Route::get("/matkul/{id}/hapus", [MatkulController::class, "hapusMatkul"])->name("matkul.data.hapus")->whereNumber("id");

Route::fallback(function(){
    return view("errors.404");
});