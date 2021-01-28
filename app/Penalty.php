<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penalty extends Model
{
    protected $guarded = [];

    public function user_id()
    {

        return $this->belongsTo('App\User');

    }
}
