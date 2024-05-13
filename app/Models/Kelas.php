<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $table = "kelas";

    protected $fillable = [
        "nama",
        "dosen_wali",
        "waktu_pembelajaran"
    ];

    public function mahasiswa(): HasMany{
        return $this->hasMany(Mahasiswa::class, "id_kelas", "id");
    }
}