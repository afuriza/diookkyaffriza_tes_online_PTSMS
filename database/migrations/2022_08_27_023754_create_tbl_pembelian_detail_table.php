<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pembelian_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pembelian')->unsigned()->index()->nullable();
            $table->foreign('id_pembelian')->references('id')->on('tbl_pembelian')->onDelete('set null');
            // $table->string('kode_barang')->nullable();
            // $table->foreign('kode_barang')->references('kode_barang')->on('tbl_barang')->onDelete('cascade');
            $table->integer('qty');
            $table->decimal('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pembelian_detail');
    }
};
