<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AkunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <3; $i++){
        
        DB::table('users')->insert([
            'name' => $faker-> firstNameMale,
            'password' => $faker-> userName,
            'email' => $faker-> email,
            'alamat' => $faker-> city, 
            ]);
            
            }
        }
}
