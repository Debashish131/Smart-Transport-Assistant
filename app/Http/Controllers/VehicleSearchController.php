<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\vehicle_info;

class VehicleSearchController extends Controller
{


    public function index()
    {

        return view('User.VehicleDetails');
        Toastr::success('Data find Successfully', 'Success', ["positionClass" => "toast-top-right"]);

    }
}
