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
        Schema::create('detailpenjualans', function (Blueprint $table) {
            $table->integer('DetailID');
            $table->primary('DetailID');
            $table->integer('PenjualanID');
            $table->foreign('PenjualanID')->references('PenjualanID')->on('penjualans');
            $table->integer('ProdukID');
            $table->foreign('ProdukID')->references('ProdukID')->on('produks');
            $table->integer('JumlahProduk');
            $table->decimal('Subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpenjualans');
    }
};
