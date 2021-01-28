<?php

namespace App\Http\Controllers;

use App\complain;
use App\Penalty;
use App\RegistrationForRC;
use App\User;
use App\vehicle_info;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $application = RegistrationForRC::where([
            ['Creator', '=', Auth::user()->name]])->get();
        $appTime = RegistrationForRC::orderBy('created_at', 'desc')->get();

        $complain =
//            complain::orderBy('created_at', 'desc')->get();
            complain::where([
                ['Creator', '=', Auth::user()->name]])->get();
        $vehicle = vehicle_info::where([
            ['Creator', '=', Auth::user()->name]
        ])->get();

        $userTest=Penalty::where([
            ['id', '=', Auth::user()->id]
        ])->get();
        return view('User.dashboard', compact('application', 'complain', 'appTime', 'vehicle','userTest'));

    }

    public function data()
    {
        $application = RegistrationForRC::where([
            ['Creator', '=', Auth::user()->name]])->get();
        return view('User.dashboard', compact('application'));

    }

    public function license()
    {
        $license = vehicle_info::where([
            ['creator', '=', Auth::user()->name]])->get();
        return view('User.license', compact('license'));

    }

    public function profile()
    {
        $profile = User::where([
            ['name', '=', Auth::user()->name]])->get();
        return view('User.profile', compact('profile'));

    }

}
