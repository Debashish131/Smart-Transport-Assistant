<?php

namespace App;

use App\vehicle_info;
use Illuminate\Database\Eloquent\Model;

class RegistrationForRC extends Model
{
//    protected $fillable = ['Name', 'FatherName', 'DOB', 'BloodGroup','NID', 'Occupation', 'Address', 'PermanentAddress', 'Phone', 'Email',
//        'EmergencyContact', 'VehicleType', 'BRTAoffice', 'Vehicle_number'];

    protected $guarded = [];

    public function vehicle()
    {

        return $this->hasOne('App\Vehicle_info', 'owner_id');

    }

    public function user_id()
    {

        return $this->belongsTo('App\User');

    }

}


