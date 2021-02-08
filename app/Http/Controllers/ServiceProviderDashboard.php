<?php

namespace App\Http\Controllers;

use App\dreamwaver_booking;
use Illuminate\Http\Request;

class ServiceProviderDashboard extends Controller
{
    function view(){

        $allOrders= dreamwaver_booking::all();


        return view('layouts/serviceProviderDashboard')->with(['allOrders'=>$allOrders]);
    }
}
