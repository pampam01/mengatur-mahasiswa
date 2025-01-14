<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $table = 'matkuls';

    protected $fillable = [
        'nama',
        'sks',
        'semester',
        'tahun',
    ];

    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class, "id_matkul", "id");
    }
}
