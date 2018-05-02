<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\registrationm;
use App\User;
use Auth;
use Hash;
use Session;
class Registration extends Controller
{
     public function create(){
         if(Auth::user()['user_type']==USERTYPE[0]) {
             return view('admin.createUser');
         }
         return back();

     }
    protected function insertdata(Request $request){


        $loginname = $request->loginname;
        $pass = Hash::make($request->pass);
//        $clientname = $request->clientname;
        $number = $request->number;
        $email = $request->email;
        $address = $request->address;

//        $short_name = implode('', array_map(function($v) { return $v[0]; }, explode(' ', $clientname)));

//        $save= (new registrationm)->insertdata($loginname,$pass,$clientname,$contact,$number,$email,$address,$web,$short_name);

        try{
            //your query
//            $save= (new registrationm)->insertdata($loginname,$pass,$clientname,$contact,$number,$email,$address,$web,$short_name);
            $user=new User();
            $user->username=$loginname;
            $user->password=$pass;
            $user->user_type=$request->usertype;
            $user->company_name='Tekno Visial';
            $user->short_name=$loginname;
            $user->contact_person='User';
            $user->contact_no=$number;
            $user->email=$email;
            $user->address=$address;
            $user->client_status='Active';
            $user->save();

            Session::flash('message', 'User Created');
        }
        catch(Exception $e){
            Session::flash('message', 'Problem Occured '.$e);
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
