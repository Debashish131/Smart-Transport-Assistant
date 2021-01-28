<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\RegistrationForRC;
use App\User;
use App\vehicle_info;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class UserdetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function details()
    {
        $details = RegistrationForRC::all();
//        $user=User::all();
        return view('admin.userdetails', compact('details'));
    }

    public function editApplication($id)
    {
        $details = RegistrationForRC::find($id);
        return view('admin.updateUserApplication', compact('details'));

    }

    public function updateApplication(Request $request, $id)
    {
        $request->validate([
            'Address' => 'required',
            'Phone' => 'required',
            'Email' => 'required',
        ]);
        $details = RegistrationForRC::find($id);
        $details->Address = $request->input('Address');
        $details->Phone = $request->input('Phone');
        $details->Email = $request->input('Email');
        $details->save();
        Toastr::success('Update User Details Information Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/userdetails');
    }

    public function uservehicledetails()
    {

        $vehicleDetails = vehicle_info::all();
        return view('admin.UserVehicleDetails', compact('vehicleDetails'));

    }

    public function editVehicle($id)
    {
        $details = vehicle_info::find($id);
        return view('admin.vehicleUpdate', compact('details'));

    }

    public function updateVehicle(Request $request, $id)
    {
        $request->validate([
            'Expire_date' => 'required',

        ]);
        $details = vehicle_info::find($id);
        $details->Expire_date = $request->input('Expire_date');
        $details->save();
        Toastr::success('Update User Details Information Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/uservehicledetails');
    }

    public function DeleteUserprofile($id)
    {
        $details = RegistrationForRC::find($id);
        $details->delete();
        return back();
    }

    public function penalty(Request $request, $id)
    {
        $details = RegistrationForRC::find($request->id);
//        $complain = new complain();
//        $complain->user_id = Auth::user()->id;
//        $complain->creator=Auth::user()->name;
//        $complain->Is_approved = true;
//        if('Is_approved'==false)
        $details->update(['penalty' => '50']);

//        $complain->Is_approved == true;
//        $complain->save();
//        $complain->save();
        return back();

    }

    public function search()
    {
        return view('admin.vehicleSearch');


    }

    public function licenseApprove(Request $request, $id)
    {
        $app = RegistrationForRC::findOrFail($id);
        $app->Is_approved = '1';
        $app->save($request->all());
        Toastr::success('User complain Approve Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/userdetails');
    }


}
