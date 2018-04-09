<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\registrationm;
use Hash;
use Session;
class Registration extends Controller
{
     public function create(){

         return view('admin.createUser');

     }
    protected function insertdata(Request $request){


        $loginname = $request->loginname;
        $pass = Hash::make($request->pass);
        $clientname = $request->clientname;
        $contact = $request->contact;
        $number = $request->number;
        $email = $request->email;
        $address = $request->address;
        $web = $request->web;

        $short_name = implode('', array_map(function($v) { return $v[0]; }, explode(' ', $clientname)));

//        $save= (new registrationm)->insertdata($loginname,$pass,$clientname,$contact,$number,$email,$address,$web,$short_name);

        try{
            //your query
            $save= (new registrationm)->insertdata($loginname,$pass,$clientname,$contact,$number,$email,$address,$web,$short_name);

            echo "<script type=\"text/javascript\">
				alert(\"Registration Request Sent Successfully\");
				</script>";
        }
        catch(Exception $e){
            echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				</script>";
        }



        return back();


    }

    public function user_check(Request $request)
    {

        $loginname = $request->email;

        try{
            //your query
            $check= (new registrationm)->user_check($loginname);

            return $check;
        }
        catch(Exception $e){
            echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				
				</script>";
        }

    }

}
