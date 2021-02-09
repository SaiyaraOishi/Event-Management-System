<?php

namespace App\Http\Controllers;

use App\dreamwaver_booking;
use App\OrderBooking;
use Illuminate\Http\Request;

class DreamwaverBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order=new dreamwaver_booking;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->date = $request->date;
        $order->time = $request->time;
        $order->service_type = $request->service_type;
        $query=$order->save();
        if($query){
            return "Order Confirmed!!!";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dreamwaver_booking  $dreamwaver_booking
     * @return \Illuminate\Http\Response
     */
    public function show(dreamwaver_booking $dreamwaver_booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dreamwaver_booking  $dreamwaver_booking
     * @return \Illuminate\Http\Response
     */
    public function edit(dreamwaver_booking $dreamwaver_booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dreamwaver_booking  $dreamwaver_booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dreamwaver_booking $dreamwaver_booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dreamwaver_booking  $dreamwaver_booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(dreamwaver_booking $dreamwaver_booking)
    {
        //
    }
}
