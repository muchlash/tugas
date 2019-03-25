<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Berita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function(Blueprint $table){
                        $table->Increments('id_berita')->unique;
                        $table->string('judul_berita');
                        $table->date('tanggal_berita');
                        $table->string('penulis_berita');
                        $table->text('isi_berita');        
                        });
        
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('berita');
    }
}
