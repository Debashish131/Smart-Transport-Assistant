<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
    protected $fillable=['offence','vehicle_num','location','images','date','comment'];
}
