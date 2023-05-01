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
        Schema::create('hwa_performa_ot', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('master_id');
            $table->string('tgl')->nullable();
            $table->string('remark')->nullable();
            $table->bigInteger('kar_id')->nullable();
            $table->integer('jam_mulai')->nullable();
            $table->integer('jam_selesai')->nullable();
            $table->integer('jam_pot')->nullable();
            $table->integer('jam_total')->nullable();
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
        Schema::dropIfExists('performa_ots');
    }
};
