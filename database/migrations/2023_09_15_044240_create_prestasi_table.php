<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('NIM', 25);
            $table->string('nama_penghargaan', 150);
            $table->string('instansi', 100);
            $table->integer('tahun');
            $table->string('sertifikat', 255);
            $table->foreign('NIM')->references('NIM')->on('datauser');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};
