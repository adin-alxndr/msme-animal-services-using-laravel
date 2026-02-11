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
        Schema::create('cek_anabul', function (Blueprint $table) {
            $table->id('id_cek');
            $table->timestamp('timestamp');
            $table->string('nama_owner', 50);
            $table->string('nama_anabul', 50);
            $table->string('sesi', 50);
            $table->date('tanggal');
            $table->string('catatan', 255);
            $table->string('kode_reservasi', 6);
            $table->string('status', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cek_anabul');
    }
};
