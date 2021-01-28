<?php

namespace App\Http\Controllers;

use App\RegistrationForRC;
use App\vehicle_info;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {

        return view('User.RegistrationForm');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'Name' => ['required', 'min:3', 'max:20'],
//            'Creator' => ['required'],
            'FatherName' => ['required', 'min:3', 'max:20'],
            'DOB' => ['required'],
            'BloodGroup' => ['required'],
            'NID' => ['required'],
            'Occupation' => ['required', 'min:3', 'max:20'],
            'Address' => ['required'],
            'PermanentAddress' => ['required'],
            'Phone' => ['required'],
            'Email' => ['required'],//|email|unique:users'
            'EmergencyContact' => ['required', 'numeric'],
            'VehicleType' => ['required'],
            'BRTAoffice' => ['required', 'numeric'],
            'Vehicle_number' => ['required', 'alpha_num'],
            'Condition' => ['required'],
            'Issue_date' => ['required'],
            'Expire_date' => ['required'],
//            'regex:/^(?:\+88|01)?(?:\d{11}|\d{13})$/'
// '\'regex:/(?:\d{17}|\d{13}|\d{10})/\',', 'unique:users'
        ]);
//RegistrationForRC::create($request->all());

        try {

//            $user_name = Auth::user()->name;

            $registration = new RegistrationForRC();
            $registration->Name = $request->input('Name');
            $registration->FatherName = $request->input('FatherName');
            $registration->DOB = $request->input('DOB');
            $registration->BloodGroup = $request->input('BloodGroup');
            $registration->NID = $request->input('NID');
            $registration->Occupation = $request->input('Occupation');
            $registration->Address = $request->input('Address');
            $registration->PermanentAddress = $request->input('PermanentAddress');
            $registration->Phone = $request->input('Phone');
            $registration->Email = $request->input('Email');
            $registration->EmergencyContact = $request->input('EmergencyContact');
            $registration->FatherName = $request->input('FatherName');
            $registration->Creator = Auth::user()->name;

//            $registration->penalty = $request->input('penalty');
            $registration->save();
//            $regi = RegistrationForRC::create([
//                'Name' => request('Name'),
//                'FatherName' => request('FatherName'),
//                'DOB' => request('DOB'),
//                'BloodGroup' => request('BloodGroup'),
//                'NID' => request('NID'),
//                'Occupation' => request('Occupation'),
//                'Address' => request('Address'),
//                'PermanentAddress' => request('PermanentAddress'),
//                'Phone' => request('Phone'),
//                'Email' => request('Email'),
//                'EmergencyContact' => request('EmergencyContact'),
//                'Creator' => 'Auth::user()->name',
//            ]);


            $registration->vehicle()->create([

                'VehicleType' => request('VehicleType'),
                'BRTAoffice' => request('BRTAoffice'),
                'Vehicle_number' => request('Vehicle_number'),
//                if ($request->hasFile('condition'))
//                {
//                    $file = $request->file('condition');
//                    // dd($request->file('image'));
//                    $extension = $file->getClientOriginalExtension();
//                    $filename = $file->getClientOriginalName();
//                    $file->move('categorypic/', $filename);
//                    $registration->condition = $filename;
//                }
                'Condition' => request('Condition'),
                'Issue_date' => request('Issue_date'),
                'Expire_date' => request('Expire_date'),
                'Creator' => (Auth::user()->name),
                'user_id' => (Auth::user()->id),

            ]);


            Toastr::success('Added Data Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        } catch (ModelNotFoundException $exception) {
            return back()->withErrors($exception->getMessage())->withInput();
        }
        return back();

    }

}
