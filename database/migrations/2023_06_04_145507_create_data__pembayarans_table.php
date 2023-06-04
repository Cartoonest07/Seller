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
        Schema::create('data__pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang');
            $table->integer('total_harga');
            $table->integer('virtual_account');
            $table->string('status_pembayaran');
            $table->unsignedBigInteger('id_pemesanan');
            $table->integer('harga_produk_pemesanan');
            $table->timestamps();
            $table->foreign('id_pemesanan')->references('id')->on('data__pemesanans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__pembayarans');
    }
};
