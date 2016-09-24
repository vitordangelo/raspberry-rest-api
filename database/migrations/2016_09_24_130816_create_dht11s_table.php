<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDht11sTable extends Migration
{
    public function up()
    {
        Schema::create('dht11s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('temperatura');
            $table->string('umidade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('dht11s');
    }
}
