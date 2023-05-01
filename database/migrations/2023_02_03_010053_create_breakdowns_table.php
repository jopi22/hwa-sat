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
        Schema::create('hwa_breakdown', function (Blueprint $table) {
            $table->id();
            $table->string('tgl')->nullable();
            $table->bigInteger('equip_id')->nullable();
            $table->dateTime('jam_mulai')->nullable();
            $table->dateTime('jam_selesai')->nullable();
            $table->integer('jam_total')->nullable();
            $table->bigInteger('dedicated_id')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('breakdowns');
    }
};
