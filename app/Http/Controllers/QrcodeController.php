<?php

namespace App\Http\Controllers;

use App\RegistrationForRC;
use Illuminate\Support\Facades\Auth;
use App\Registration;
use App\vehicle_info;

// use App\Http\Controllers\QrCode;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{

    public function qrcode()
    {
        $Name = "";
        $FatherName = "";
        $DOB = "";
        $BloodGroup = "";
        $NID = "";
        $Phone = "";
        $Vehicle_number = "";
        $owner_id = "";
        $Is_approved = "";


        $reg = RegistrationForRC::where([
            ['Creator', '=', Auth::user()->name]
        ])->get();
        $value = vehicle_info::where([
            ['Creator', '=', Auth::user()->name]
        ])->get();

        foreach ($value as $val) {
            # code...

            $Vehicle_number = $val['Vehicle_number'];
            $owner_id = $val['owner_id'];
//            $Name = $val->owner['name'];


        }
        foreach ($reg as $reg) {
            $Name = $reg['Name'];

            $FatherName = $reg['FatherName'];

            $DOB = $reg['DOB'];


            $BloodGroup = $reg['BloodGroup'];

            $NID = $reg['NID'];


            $Phone = $reg['Phone'];
            $Is_approved = $reg['Is_approved'];
//            @if ($Is_approved == 0)
//                $Is_approved = "pending";
//            @else
//                $Is_approved = "Approve";
//            @endif

//            $Vehicle_number = $val->owner()['$Vehicle_number'];
        }


        return QrCode::size(300)->generate("Name: " . $Name . " \nFather Name: " . $FatherName . "\n
     Date of Birth" . $DOB . "\nBlood group:" . $BloodGroup . "\n NID Number: " . $NID . "\n Phone: " . $Phone . "\n
     Vehicle Number: " . $Vehicle_number . " \n owner id: " . $owner_id . "\n Approve Status :" . $Is_approved);


//        return QrCode::size(300)->generate("vehi: " . $Vehicle_number . " \n owner id: " . $owner_id . " \n owner name: " . $Name);
    }
}
