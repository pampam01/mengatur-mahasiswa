<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string("nim")->nullable(false)->unique();
            $table->string("nama")->nullable(false);
            $table->enum("jenis_kelamin", ["L", "P"]);
            $table->unsignedBigInteger("id_kelas")->nullable(false);
            $table->unsignedBigInteger("id_matkul")->nullable(false);
            $table->foreign("id_kelas")->references("id")->on("kelas");
            $table->foreign("id_matkul")->references("id")->on("matkuls");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};