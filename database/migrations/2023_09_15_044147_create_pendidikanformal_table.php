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
        Schema::create('pendidikanformal', function (Blueprint $table) {
            $table->id();
            $table->string('NIM', 25);
            $table->string('nama_sekolah',150);
            $table->integer('tahun_masuk');
            $table->integer('tahun_keluar');
            $table->foreign('NIM')->references('NIM')->on('datauser');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikanformal');
    }
};
