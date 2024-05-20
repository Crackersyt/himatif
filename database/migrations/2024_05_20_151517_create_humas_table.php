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
        Schema::create('humas', function (Blueprint $table) {
            $table->id();
            $table->string('judul_proker', 255);
            $table->string('des_proker',255);
            $table->string('foto_anggota',255);
            $table->string('nama',255);
            $table->string('email',255);
            $table->string('subject',255);
            $table->string('pesan',500);
            $table->string('foto_dokumentasi',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('humas');
    }
};
