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
        Schema::create('datapilar', function (Blueprint $table) {
            $table->id();
            $table->string('no_pilar');
            $table->string('kecamatan');
            $table->string('kelurahan')->nullable();
            $table->string('lokasi_pilar');
            $table->string('koordinat_x');
            $table->string('koordinat_y');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapilar');
    }
};
