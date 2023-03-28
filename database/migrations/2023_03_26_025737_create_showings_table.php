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
        Schema::create('showings', function (Blueprint $table) {
            $table->unsignedBigInteger('id_bioskop');
            $table->unsignedBigInteger('id_film');
            $table->string('harga');
            $table->string('jam');
            $table->string('studio');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_bioskop')->references('id')->on('bioskops');
            $table->foreign('id_film')->references('id')->on('films');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showings');
    }
};
