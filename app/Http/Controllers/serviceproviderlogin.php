<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $email = ServiceproviderregisterController::where('spemail','=',$request->email)->first();
        if($email)
        {
            if($request->sppassword == $email->password)
                return "success";
            else
                return "invalide password";

        }
        else
            return "no account";
   }


}
