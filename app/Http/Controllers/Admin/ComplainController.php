<?php

namespace App\Http\Controllers\Admin;

use App\complain;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function viewComplain()
    {
        $complain = complain::all();
        return view('Admin.allcomplain', compact('complain'));
    }

    public function editComplain($id)
    {
        $complain = complain::find($id);
        return view('admin.updateComplain', compact('complain'));
    }

    public function updateComplain(Request $request, $id)
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
//        return view('Admin.home', compact('complain'));
        Toastr::success('Update User complain Information Successfully', 'Success', ["positionClass" => "toast-top-right"]);
//        return back();
        return redirect('/allcomplain');
    }


    public function deleteComplain($id)
    {
        $complain = complain::find($id);
        $complain->delete();
        Toastr::error('User complain delete Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }

//    public function approved_action(Request $request, $id)
//    {
//        $complain = complain::find($id);
//        if ($complain->Is_approved == false) {
//            $complain->Is_approved = true;
//            $complain->save();
//            Toastr::success('Complain approved Successfully', 'Success', ["positionClass" => "toast-top-right"]);
//        } else {
//            Toastr::danger('Complain already approved', 'Success', ["positionClass" => "toast-top-right"]);
//        }
//        return view('Admin.allcomplain', compact('complain'));
//
//    }

    public function approved_action(Request $request, $id)
    {
//        $complain = complain::where('id', '=', id($id))->first();
//        $complain = complain::find($request->id);
//        if ($complain->Is_approved == 0) {
        $complain = complain::findOrFail($id);
        $complain->Is_approved = '1';
        $complain->save($request->all());
//        $complain=null;
//        $complain->Is_approved = '1';
//        $complain->save();
//        return view('admin.allcomplain');
//        return redirect('admin.allcomplain');
        Toastr::success('User complain Approve Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/allcomplain');
//        return view('admin.approve', compact('complain'));
    }
//    }
//    public function app(Request $request, $id)
//    {
//        $complain = complain::find($request->id);
////        $complain = new complain();
////        $complain->user_id = Auth::user()->id;
////        $complain->creator=Auth::user()->name;
////        $complain->Is_approved = true;
////        if('Is_approved'==false)
//        $complain->update(['Is_approved' => 'true']);
//
////        $complain->Is_approved == true;
////        $complain->save();
////        $complain->save();
//        return view('admin.allcomplain', compact('complain'));
//
//    }


}
