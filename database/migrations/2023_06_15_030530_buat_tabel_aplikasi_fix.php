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
        Schema::create('tabel_aplikasi', function(Blueprint $table) {
            $table->string('id')->unique();
            $table->string('nama_instansi');
            $table->string('nama_unit');
            $table->string('nama_aplikasi');
            $table->string('pemilik');
            $table->string('platform');
            $table->string('url');
            $table->string('tempataplikasi');
            $table->string('informasi');
            $table->string('dasarhukum');
            $table->string('sektorpelayananpublik');
            $table->string('sektorpelayananpubliklainnya');
            $table->string('deskripsi');
            $table->string('fiturutama');
            $table->string('pengguna');
            $table->string('daftarlayanan');
            $table->string('daftarproduklayanan');
            $table->string('launching');
            $table->string('penanggungjawab');
            $table->string('kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_aplikasi');
    }
};
