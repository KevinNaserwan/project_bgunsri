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
        Schema::create('motivasi', function (Blueprint $table) {
            $table->id();
            $table->string('NIM', 25);
            $table->string('motivasi', 255);
            $table->foreign('NIM')->references('NIM')->on('datauser');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motivasi');
    }
};
