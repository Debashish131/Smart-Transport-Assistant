<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Renew;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class VehicleRenewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $details = Renew::all();
        return view('Admin.VehicleRenew', compact('details'));

    }

    public function deleteRenew($id)
    {
        $details = Renew::find($id);
        $details->delete();
        Toastr::error('User Vehicle Renew Data delete Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
