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
        Schema::create('hwa_pemesanan_barang_list', function (Blueprint $table) {
            $table->id();
            $table->string('tgl')->nullable();
            $table->bigInteger('pemesanan_id')->nullable();
            $table->bigInteger('barang_id')->nullable();
            $table->integer('jumlah')->nullable();
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
        Schema::dropIfExists('pemesanan__barang__lists');
    }
};
