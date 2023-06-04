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
        Schema::create('data__pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk_pemesanan');
            $table->string('harga_produk_pemesanan');
            $table->date('tanggal_pemesanan');
            $table->string('status_pemesanan');
            $table->string('username');
            $table->string('nama_customer');
            $table->string('alamat_customer');
            $table->string('telp_customer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__pemesanans');
    }
};
