<?php

namespace App\Http\Controllers\Officer;

use Auth;
use App\complain;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;


class ComplainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:officer');
    }

    public function complain()
    {
        $complain = complain::all();
        return view('officer.showComplain', compact('complain'));

    }

    public function approveComplain($id)
    {
        $complain = complain::find($id);
        $complain->delete();
        return back();
    }

    public function offiereditComplain($id)
    {
        $complain = complain::find($id);
        return view('officer.updateComplain', compact('complain'));

    }

    public function updateComplainOfficer(Request $request, $id)
    {
        $request->validate([
            'offence' => 'required',
            'location' => 'required',
            'comment' => 'required',
        ]);
        $complain = complain::find($id);
        $complain->offence = $request->input('offence');
        $complain->location = $request->input('location');
        $complain->comment = $request->input('comment');
        $complain->save();
        Toastr::success('Update User complain Information Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/usercomplain_details');
    }


    public function approvedByofficer(Request $request, $id)
    {

        $complain = complain::findOrFail($id);
        $complain->Is_approved = '1';
        $complain->save($request->all());
        Toastr::success('User complain Approve Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/usercomplain_details');
    }

}
