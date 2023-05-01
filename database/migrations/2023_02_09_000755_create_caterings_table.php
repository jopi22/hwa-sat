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
        Schema::create('hwa_catering', function (Blueprint $table) {
            $table->id();
            $table->string('tgl')->nullable();
            $table->string('master_id')->nullable();
            $table->string('cat_id')->nullable();
            $table->string('pagi')->nullable();
            $table->string('siang')->nullable();
            $table->string('sore')->nullable();
            $table->string('malam')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('caterings');
    }
};
