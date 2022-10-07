<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTentangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tentangs', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->text("alamat");
            $table->string("no_telp");
            $table->string("email")->unique();
            $table->text("deskripsi");
            $table->string("kode_pos");
            $table->string("logo");
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
        Schema::dropIfExists('tb_tentangs');
    }
}