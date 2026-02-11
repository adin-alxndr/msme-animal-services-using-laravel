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
        Schema::create('hotel', function (Blueprint $table) {
            $table->id('id_hotel');
            $table->timestamp('timestamp');
            $table->string('nama_owner', 50);
            $table->string('nama_anabul', 50);
            $table->string('jenis', 50);
            $table->date('tgl_antar');
            $table->date('tgl_jemput');
            $table->string('jam_antar', 20);
            $table->string('jam_jemput', 20);
            $table->string('status', 15);
            $table->string('kode_reservasi', 6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel');
    }
};
