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
        Schema::create('grooming', function (Blueprint $table) {
            $table->id('id_grooming');
            $table->timestamp('timestamp');
            $table->string('nama_owner', 50);
            $table->string('nama_anabul', 50);
            $table->string('jenis', 50);
            $table->string('tipe', 20);
            $table->date('tanggal');
            $table->string('jam', 20);
            $table->string('status', 15);
            $table->string('kode_reservasi', 6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grooming');
    }
};
