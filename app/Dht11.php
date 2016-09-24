<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dht11 extends Model
{
    protected $fillable = [
    		 'temperatura', 'umidade',
    ];
}
