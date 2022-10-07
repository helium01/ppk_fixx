<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_kategori");
            $table->unsignedBigInteger("id_pedagang");
            $table->decimal("harga", 10, 2);
            $table->text("deskripsi");
            $table->float("berat");
            $table->timestamps();
            $table->String("foto");
            $table->string('diskon');
            $table->foreign("id_kategori")->references("id")->on("tb_kategoris");
            $table->foreign("id_pedagang")->references("id")->on("tb_pedagangs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_barangs');
    }
}