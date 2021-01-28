<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {

        return view('User.feedback');

    }

    public function store(Request $request)
    {
        feedback::create($request->all());
        Toastr::success('Submit Feedback Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return view('User.feedback');

    }

}
