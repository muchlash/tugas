<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BeritaKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_kategori', function(Blueprint $table){
            $table->bigIncrements('id_berita_kategori')->unique;
            $table->integer('berita_id_berita')->unsigned();
            $table->foreign('berita_id_berita')->references('id_berita')->on('berita')->onDelete('cascade');
            $table->integer('kategori_id_kategori')->unsigned();
            $table->foreign('kategori_id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita_kategori');
    }
}
