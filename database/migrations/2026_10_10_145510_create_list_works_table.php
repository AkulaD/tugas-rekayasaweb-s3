<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('listworks', function (Blueprint $table) {
            $table->id();
            $table->string('judul_anime');
            $table->string('tipe');
            $table->integer('tahun_rilis');
            $table->string('genre_utama');
            $table->string('sumber_adaptasi');
            $table->string('sutradara');
            $table->integer('jumlah_episode');
            $table->string('musim_rilis');
            $table->string('nama_file_gambar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('listworks');
    }
};