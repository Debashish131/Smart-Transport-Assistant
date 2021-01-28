<?php

namespace App\Http\Controllers;

use App\vehicle_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UservehicleController extends Controller
{
    public function showVehicle_details()
    {
//        $vehicleDetails = vehicle_info::where([
//            ['owner_id', '=', Auth::user()->id]
//        ])->get();
        $vehicle = vehicle_info::where([
            ['Creator', '=', Auth::user()->name]
        ])->get();
//        dd(request());
        return view('User.Uservehicle', compact('vehicle'));

    }
}
