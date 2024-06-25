<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transaksi_penjualans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id');
            $table->integer('jumlah');
            $table->decimal('total_harga', 15, 2);
            $table->timestamp('tanggal_transaksi')->useCurrent();
            $table->timestamps();

            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_penjualans');
    }
};
