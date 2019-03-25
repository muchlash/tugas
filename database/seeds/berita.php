<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class berita extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i<5; $i++){
            DB::table('berita')->insert([
            'judul_berita' => $faker-> sentence,
            'tanggal_berita' => $faker-> date,
            'penulis_berita' => $faker-> name,
            'isi_berita' => $faker-> text,    
            ]);
        }
    }
}
