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
        Schema::table('tabel_aplikasi', function(Blueprint $table) {
            $table->renameColumn('nama_instansi', 'instansi_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('tabel_aplikasi', function(Blueprint $table) {
            $table->renameColumn( 'instansi_id', 'nama_instansi');
        });
    }
};
