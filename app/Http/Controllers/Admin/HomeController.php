<?php

namespace App\Http\Controllers\Admin;

use App\complain;
use App\emergency;
use App\feedback;
use App\Http\Controllers\Controller;
use App\Order;
use App\Penalty;
use App\RegistrationForRC;
use App\User;
use App\vehicle_info;
use Brian2694\Toastr\Facades\Toastr;
use carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::orderBy('created_at', 'desc')->get();
        $recent = User::orderBy('created_at', 'desc')->get();
        $application = RegistrationForRC::orderBy('created_at', 'desc')->get();
        $complain = complain::orderBy('created_at', 'desc')->get();
        $order = Order::orderBy('created_at', 'desc')->get();
        $emergency = emergency::all();

        return view('admin.home', compact('recent', 'user', 'application',
            'complain', 'order', 'emergency'));
    }

    public function allUser()
    {
        $details = User::all();
        $vehicleDetails =vehicle_info::all();
        return view('admin.layouts.alluserDetails', compact('details','vehicleDetails'));

    }

    public function DeleteUser($id)
    {
        $details = User::find($id);
        $details->delete();
        return back();
    }

    public function feedbackUser()
    {
        $details = feedback::all();
        return view('admin.userFeedback', compact('details'));

    }

    public function givePenalty($id)
    {
        $penalty = Penalty::find($id);
        return view('admin.user', compact('penalty'));
    }

    public function updatePenalty(Request $request, $id)
    {
        $penalty = penalty::find($id);
        $penalty->penalty = $request->input('penalty');
        $penalty->save();
        Toastr::success('Update User complain Information Successfully', 'Success',
            ["positionClass" => "toast-top-right"]);
        return redirect('/alluser');
    }

}
