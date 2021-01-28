<?php

namespace App\Http\Controllers;

use App\emergency;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmergencyController extends Controller
{
    public function emHelp(Request $request)
    {

        return view('user.emergency');

    }

    public function storeEmergency(Request $request)
    {
        $em = new emergency();
        $em->Problem = $request->input('Problem');
        $em->vehicle_num = $request->input('vehicle_num');
        $em->License_number = $request->input('License_number');
        $em->Phone = $request->input('Phone');
        $em->Location = $request->input('Location');
        $em->creator = Auth::user()->name;
        $em->save();
        Toastr::success('Added Data Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();

    }
}
