<?php

namespace App\Http\Controllers;

use App\Renew;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Illuminate\Http\Request;

class renewControlller extends Controller
{
    public function renewApplication(Request $request)
    {
        Renew::create($request->all());
        Toastr::success('Apply for Renew Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();

    }

    public function index()
    {

        return view('User.vehicleRenew');

    }
}
