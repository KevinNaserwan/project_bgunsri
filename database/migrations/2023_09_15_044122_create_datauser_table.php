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
        Schema::create('datauser', function (Blueprint $table) {
            $table->string('nama_lengkap', 60);
            $table->string('panggilan', 50);
            $table->string('nim', 25)->primary();
            $table->string('prodi', 50);
            $table->string('ttl', 100);
            $table->integer('umur');
            $table->string('jenis_kelamin', 15);
            $table->string('alamat', 255);
            $table->string('no_telp', 15);
            $table->string('email', 50);
            $table->string('line', 35);
            $table->string('fb', 35);
            $table->string('ig', 35);
            $table->integer('tinggi_badan');
            $table->string('bahasa', 255);
            $table->string('hobi', 255);
            $table->string('nama_ayah', 100);
            $table->string('nama_ibu', 100);
            $table->string('pekerjaan_ortu', 100);
            $table->string('no_ortu', 15);
            $table->string('alamat_ortu', 255);
            $table->string('pas_foto', 255);
            $table->string('close_up', 255);
            $table->string('full_body', 255);
            $table->string('sertifikat', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datauser');
    }
};
