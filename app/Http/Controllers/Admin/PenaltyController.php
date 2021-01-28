<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Penalty;
use App\User;
use Illuminate\Http\Request;

class PenaltyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function penalty()
    {
        $data = Penalty::all();
        $user = User::all();
        return view('admin.penaltymanage', compact('data','user'));
    }

}
