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
        Schema::create('log_masters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('master_id')->nullable();
            $table->bigInteger('equip_id')->nullable();
            $table->string('tgl')->nullable();
            $table->bigInteger('log_id')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('hmkm')->nullable();
            $table->string('ket')->nullable();
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
        Schema::dropIfExists('log_masters');
    }
};
