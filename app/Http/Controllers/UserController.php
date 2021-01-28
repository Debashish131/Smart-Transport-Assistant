<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\complain;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        return view('User.master');

    }

    public function dash()
    {
        $complain = complain::all();
        return view('User.dashboard', compact('complain'));

    }

    public function __construct()
    {
        $this->middleware('auth:user');
        $this->middleware(['auth', 'verified']);
    }

    /*
     * After logging as user the dashboard for user
     * @return \Illuminate\Contracts\Support\Referable
     * */

    public function userDashboard()
    {
        $complain = complain::all();
        return view('User.dashboard', compact('complain'));

    }



}
