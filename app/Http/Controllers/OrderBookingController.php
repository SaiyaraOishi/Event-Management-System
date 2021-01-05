<?php

namespace App\Http\Controllers;

use App\OrderBooking;
use Illuminate\Http\Request;

class OrderBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order=new OrderBooking;
        $order->name = $request->name;
        $order->contact_number = $request->contact;
        $order->email = $request->email;
        $order->date = $request->date;
        $order->venue_name = $request->venue_name;
        $order->venue_address = $request->venue_address;
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
     * @param  \App\OrderBooking  $orderBooking
     * @return \Illuminate\Http\Response
     */
    public function show(OrderBooking $orderBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderBooking  $orderBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderBooking $orderBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderBooking  $orderBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderBooking $orderBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderBooking  $orderBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderBooking $orderBooking)
    {
        //
    }
}
