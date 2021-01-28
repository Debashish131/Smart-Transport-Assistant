<?php

namespace App\Http\Controllers\Admin;

use App\emergency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserEmergencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function userEmergency()
    {
        $em = emergency::all();
        return view('admin.emergencyHelpUser', compact('em'));

    }

    public function deleteEmergency($id)
    {
        $em = emergency::find($id);
        $em->delete();
        return back();
    }

    public function approvedEmergency(Request $request, $id)
    {
        $em = emergency::findOrFail($id);
        $em->Is_approved = '1';
        $em->save($request->all());
        return back();
    }

    public function showUserEM($id)
    {
        $em = emergency::find($id);
        return view('admin.emergencyHelpUser', compact('em'));

    }
}
