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
        Schema::create('informasi_perumahans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lokasi_perumahan_id')
            ->constrained('lokasi_perumahans')
            ->cascadeOnDelete();
            $table->string('status_ketersediaan');
            $table->double('luas_tanah');
            $table->double('luas_bangunan');
            $table->integer('jumlah_kamar');
            $table->integer('tahun_dibangun');
            $table->string('desain');
            $table->double('harga_properti');
            $table->string('alamat_lengkap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_perumahans');
    }
};
