<?php

namespace App\Http\Controllers;

use App\dreamwaver_booking;
use Illuminate\Http\Request;
use App\serviceproviderregister;


class serviceproviderlogin extends Controller
{

    function index(Request $request)
    {
        $email = $request->spemail;
        $password = $request->sppassword;
        $user = serviceproviderregister::where('email', $email)->where('password', $password)->first();


        if($user)
        {
            $orders=dreamwaver_booking::where('service_type',$user->serviceType)->get();
//            return view('layouts/serviceProviderDashboard')->with(['order' => $orders]);
            return view('layouts/serviceProviderDashboard', compact('user', 'orders'));
        }
        else
            return "no account";
   }

    public function approveOrder($order_id)
    {
        $order = dreamwaver_booking::findOrFail($order_id);
        $order->status = 'approved';
        $order->save();


    }
    public function rejectOrder($order_id)
    {
        $order = dreamwaver_booking::findOrFail($order_id);
        $order->status = 'rejected';
        $order->save();


    }


}
