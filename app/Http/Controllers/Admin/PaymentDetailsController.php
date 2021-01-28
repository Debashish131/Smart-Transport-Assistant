<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PaymentDetailsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function PaymentDetails()
    {

        $payment = Order::all();
        return view('Admin.payment_details', compact('payment'));

    }
    public function DeletePayment($id)
    {
        $payment = Order::find($id);
        $payment->delete();
        Toastr::error('User complain Approve Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/allpayment');
    }
}
