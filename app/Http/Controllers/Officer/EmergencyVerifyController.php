<?php

namespace App\Http\Controllers\Officer;

use App\emergency;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class EmergencyVerifyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:officer');
    }

    public function userEmergency()
    {
        $em = emergency::all();
        return view('officer.VerifyEmergency', compact('em'));

    }

    public function emergenyDelete($id)
    {
        $em = emergency::find($id);
        $em->delete();
        return back();
    }

    public function officerApprove(Request $request, $id)
    {
        $em = emergency::findOrFail($id);
        $em->Is_approved = '1';
        $em->save($request->all());
        Toastr::success('Approve Data Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }

    public function showUserEM($id)
    {
        $em = emergency::find($id);
        return view('officer.VerifyEmergency', compact('em'));

    }
}
