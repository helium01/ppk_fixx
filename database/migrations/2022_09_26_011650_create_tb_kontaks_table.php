<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKontaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kontaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_tentang");
            $table->string("ak_instagram");
            $table->string("ak_facebook");
            $table->string("ak_youtube");
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
        Schema::dropIfExists('tb_kontaks');
    }
}