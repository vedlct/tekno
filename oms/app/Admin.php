<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Job;
use App\User;
use Hash;
use Auth;
class Admin extends Model
{
    public function get(){

        $id=session('user-id');

        $profile_info= User::where('user_id',$id)
                            ->limit(1)
                            ->get();
        return $profile_info;

    }
    public function newjobrequest(){

        $jobrequest=DB::table('job')
            ->where('status','pending')
            ->orderBy('jobId','desc')
            ->get();

        return $jobrequest;
    }

    public function change_job_status($id,$value){

        $job_status=DB::table('job_request')
            ->where('job_id',$id)
            ->update(array('job_status'=>$value));
        //return $job_status;
    }

    public function change_user_status($id,$value){

        User::where('user_id',$id)
            ->update(array('client_status'=>$value));

        //return true;
    }

    public function newuserrequest(){

        $userrequest= User::where('client_status','Pending')
            ->get();


        return $userrequest;
    }

    public function ongoingjob(){


        $ongoing=Job::select('jobId','companyName','category','potential')
            ->where('job.status','on going')
            ->orderBy('jobId','desc')
            ->get();

        return $ongoing;
    }

    public function jobdone(){


        $finshedwork=Job::select('jobId','companyName','category')
            ->where('status','done')
            ->orderBy('jobId','desc')
            ->get();

        return $finshedwork;
    }

    public function clientinfoview(){


        $client_view= DB::table('job')
            ->where('status', '!=', 'pending')
            ->get();
        return $client_view;

    }

    public function viewclient($id){
        $client_view= User::where('user_id',$id)
            ->get();
        return $client_view;

    }

    public function updateclient($id, $type, $company_name, $contact_person, $contact_number, $email, $address, $web){

       User::where('user_id',$id)
            ->update(array(
                'user_type'=>$type,
                'company_name'=>$company_name,
                'contact_person'=>$contact_person,
                'contact_no'=>$contact_number,
                'email'=>$email,
                'address'=>$address,
                'webaddress'=>$web,

            ));
        //return true;
    }
    public function viewservice(){

        $service= DB::table('service')
            ->orderBy('service_name', 'ASC')
            ->get();
        return $service;
    }

    public function change_service_status($id,$value){

        DB::table('service')
            ->where('service_id',$id)
            ->update(array('service_status'=>$value));
        //return true;
    }

    public function insert_service($name,$type,$status){

        $data=array(

            'service_name'=>$name,
            'service_type'=>$type,
            'service_status'=>$status
        );

        DB::table('service')->insert($data);

        //return true;

    }

    public function getinfo(){

        $info= User::where('client_status', 'Active')
//            ->orderBy('company_name', 'ASC')
            ->get();

        return $info;

    }
    public function getpass($id){

        $profile_info= User::where('user_id',$id)
            ->limit(1)
            ->get();
        return $profile_info;

    }

    public function changepass($id,$pass){

//        $password=md5($pass);
        $password=Hash::make($pass);

        $data=array(
            'password'=>$password
        );

        User::where('user_id',$id)
            ->update($data);
        //return true;
    }

    public function delete_service($id){

        $service= DB::table('service')
            ->where('service_id',$id)
            ->delete();

        //return $service;

    }






}
