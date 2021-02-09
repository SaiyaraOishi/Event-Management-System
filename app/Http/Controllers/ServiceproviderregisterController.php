<?php

namespace App\Http\Controllers;

use App\serviceproviderregister;
use Illuminate\Http\Request;

class ServiceproviderregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sp=new serviceproviderregister();
        $sp->name = $request->spname;
        $sp->contact = $request->spcontact;
        $sp->email = $request->spemail;
        $sp->servicetype = $request->sptype;
        $sp->officeaddress = $request->officeaddress;
        $sp->password = $request->sppassword;
        $query=$sp->save();
        if($query){
            return "registration successful!!!";
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
     * @param  \App\serviceproviderregister  $serviceproviderregister
     * @return \Illuminate\Http\Response
     */
    public function show(serviceproviderregister $serviceproviderregister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\serviceproviderregister  $serviceproviderregister
     * @return \Illuminate\Http\Response
     */
    public function edit(serviceproviderregister $serviceproviderregister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\serviceproviderregister  $serviceproviderregister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serviceproviderregister $serviceproviderregister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\serviceproviderregister  $serviceproviderregister
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviceproviderregister $serviceproviderregister)
    {
        //
    }
}
