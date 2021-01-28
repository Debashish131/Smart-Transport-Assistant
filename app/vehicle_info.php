<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class vehicle_info extends Model
{
    protected $guarded = [];

    public function owner()
    {

        return $this->belongsTo('App\RegistrationForRC');

    }

    public function user_id()
    {

        return $this->belongsTo('App\User');

    }
}
