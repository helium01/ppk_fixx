<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_profils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_tentang");
            $table->string("moto");
            $table->string("foto_1");
            $table->string("foto_2");
            $table->string("foto_3");
            $table->timestamps();

            $table->foreign('id_tentang')->references('id')->on('tb_tentangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_profils');
    }
}