<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideLineController extends Controller
{

    public function drivingGuide()
    {

        return view('User.guideline.driving');

    }
    public function error()
    {

        return view('404');

    }
    public function FAQ()
    {

        return view('FAQ');

    }
}
