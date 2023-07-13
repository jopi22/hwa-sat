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
        Schema::create('hwa_bon', function (Blueprint $table) {
            $table->id();
            $table->string('bon')->nullable();
            $table->date('tgl')->nullable();
            $table->string('kar_id')->nullable();
            $table->string('nominal')->nullable();
            $table->string('master_id')->nullable();
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
        Schema::dropIfExists('bons');
    }
};
