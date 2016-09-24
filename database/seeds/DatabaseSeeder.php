<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Dht11::class, 10)->create(); //Invoca a configuração em factory
    }
}
