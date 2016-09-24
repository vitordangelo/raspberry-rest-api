<?php

use Illuminate\Database\Seeder;

class Dht11TableSeeder extends Seeder
{
    public function run()
    {
        DB::table('dht11s')->insert([
            'temperatura' => str_random(10),
            'umidade' => str_random(10),
        ]);
    }
}
