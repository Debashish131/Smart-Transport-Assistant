<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Penalty;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class PenaltyController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth:user');
//    }

    public function index()
    {

        return view('User.penalty');

    }

    public function checkout()
    {

        return view('User.Checkout');

    }

    public function invoice()
    {

        return view('User.invoice');

    }

    public function penaltyUser()
    {
        $user = Penalty::all();
        return view('Admin.userPenalty', compact('user'));
    }

    public function testPenalty()
    {
        $userTest = Penalty::all();
        return view('User.dashboard',compact('userTest'));

    }


}
