<?php

namespace App\Http\Controllers;

use App\dreamwaver_booking;
use Illuminate\Http\Request;
use App\serviceproviderregister;


class serviceproviderlogin extends Controller
{

    function index(Request $request)
    {

        $email = serviceproviderregister::where('email','=',$request->spemail)->first();
        if($email)
        {
            if($request->sppassword == $email->password) {
                $allOrders = dreamwaver_booking::all();
//                return redirect()->route('serviceProviderDashboard');
                return view('layouts/serviceProviderDashboard')->with(['allOrders' => $allOrders]);
            }

            else
                return "invalid password";

        }
        else
            return "no account";
   }


}
