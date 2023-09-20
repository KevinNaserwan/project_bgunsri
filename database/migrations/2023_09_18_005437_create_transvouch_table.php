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
        Schema::create('transvouch', function (Blueprint $table) {
            $table->string('id_trans',255)->primary();
            $table->string('kode_voucher');
            $table->timestamps('created_at');
            $table->foreign('kode_voucher')->references('kode_voucher')->on('voucher');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transvouch');
    }
};
