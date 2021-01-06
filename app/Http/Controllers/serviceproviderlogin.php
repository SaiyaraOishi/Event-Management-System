<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\serviceproviderregister;

class serviceproviderlogin extends Controller
{

    function index(Request $request)
    {
//        $request->validate(
//            ['spemail'=>'required',
//                'sppassword'=>'required']
//        );
//        return $request->input();
//
//    }
//   function index(Request $request)
//   {
//       return "raisa";
        $email = serviceproviderregister::where('email','=',$request->spemail)->first();
        if($email)
        {
            if($request->sppassword == $email->password)
                return "success";
            else
                return "invalid password";

        }
        else
            return "no account";
   }


}
