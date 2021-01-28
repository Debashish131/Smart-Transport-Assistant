<?php

namespace App\Http\Controllers;

use App\RegistrationForRC;
use Brian2694\Toastr\Facades\Toastr;
use App\complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    public function addcomplain()
    {

        return view('User.complain');

    }

    public function store(Request $request)
    {

        $request->validate([
            'offence' => 'required',
            'vehicle_num' => 'required',
            'nid' => 'required',
            'location' => 'required',
            'images' => 'required|file|max:1024',
            'date' => 'required',
            'comment' => 'required',
        ]);


        $complain = new complain();
        $complain->offence = $request->input('offence');
        $complain->vehicle_num = $request->input('vehicle_num');
        $complain->nid = $request->input('nid');
        $complain->location = $request->input('location');
        $complain->images = $request->input('images');
        $complain->date = $request->input('date');
        $complain->creator = Auth::user()->name;
        $complain->user_id = Auth::user()->id;
        $complain->comment = $request->input('comment');

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('categorypic/', $filename);
            $complain->images = $filename;
        }
        $complain->save();
        Toastr::success('Added Data Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/showcomplain');

    }


    public function show()
    {
        $complain = complain::where([
            ['creator', '=', Auth::user()->name]
        ])->get();
        return view('User.showcomplain', compact('complain'));

    }

    public function edit($id)
    {
        $complain = complain::find($id);
        return view('User.update_complain', compact('complain'));

    }

    public function update(Request $request, $id)
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
        Toastr::warning('Edited Information Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/showcomplain');

    }


}
