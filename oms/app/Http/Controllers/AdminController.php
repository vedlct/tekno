<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Message;
use App\Job;
use App\Brochure;
use App\Website;
use App\Leaflet;
use App\Banner;
use App\Corporate;
use App\Logo;
use App\Image;
use App\User;
use App\Notification;
use League\Flysystem\Exception;
use stdClass;
use Auth;
use DB;
use Session;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

    }

    public function profile()
    {

        $type = session('user-type');
        if ($type == 'Admin') {

            $profile_info = (new Admin)->get();
            return view('Profile', compact('profile_info'));
        } else {

            return redirect(url('/'));
        }
    }




    public function changejobstatus(Request $request)
    {

        $type = session('user-type');
        if ($type == 'Admin') {

            $id = $request->id;
            $value = $request->value;

            //$changestatus=(new Admin)->change_job_status($id,$value);

            try {
                $changestatus = (new Admin)->change_job_status($id, $value);
                echo "Job " . $value . " successfully.";

            } catch (Exception $e) {

                echo "There is an issue. Please Refresh the page and try again.";
            }


        } else {
            return redirect(url('/'));
        }
    }

    public function newuserrequest()
    {

        $type = session('user-type');
        if ($type == 'Admin') {

            $newuserrequest = (new Admin)->newuserrequest();

            return view('admin.newuserrequest', compact('newuserrequest'));
        } else {
            return redirect(url('/'));
        }
    }

    public function changeUserStatus(Request $r)
    {
        if (Auth::user()->user_type == USERTYPE[0]) {


            $user = User::findOrFail($r->id);
            $user->client_status = $r->status;
            $user->save();


            return "Status Successfully Changed to ".$r->status;


        }

        return "Only Admin Can Change User Status";
//        changeUserStatus
//        $type = session('user-type');
//        if ($type == 'Admin') {
//
//            $id = $request->id;
//            $value = $request->value;
//
//            try {
//                $changestatus = (new Admin)->change_user_status($id, $value);
//                echo "Account " . $value . " successfully.";
//
//            } catch (Exception $e) {
//
//                echo "There is an issue. Please Refresh the page and try again.";
//            }
//
//
//        } else {
//            return redirect(url('/'));
//        }
    }

    public function ongoingjob()
    {
        if(Auth::user()->user_type ==USERTYPE[2]){
            return back();
        }

        $ongoingwork = (new Admin)->ongoingjob();
        $unseen=Notification::select('jobId',DB::Raw("Count('jobId') as total"))
            ->where('userId',Auth::user()->user_id)
            ->where('seen',0)
            ->groupBy('jobId')
            ->get();


        $messages =array();
        foreach ($ongoingwork as $work){
            $sms=Message::select('sms')->where('job',$work->jobId)->orderBy('id','desc')->first();
            $u = new stdClass;
            $u->id=$work->jobId;
            if(empty($sms)){
                $u->msg='';
            }
            else{
                $u->msg=$sms->sms;
            }


            array_push($messages, $u);
        }

        return view('admin.ongoingjobinfo', compact('ongoingwork','messages','unseen'));
//    }
//        else {
//            return redirect(url('/'));
//        }
}

    public function finshedjob()
    {
        if(Auth::user()->user_type ==USERTYPE[2]){
            return back();
        }
//
//        $type = session('user-type');
//        if ($type == 'Admin') {

            $finshedwork = (new Admin)->jobdone();

            $messages =array();
            foreach ($finshedwork as $work){
                $sms=Message::select('sms')->where('job',$work->jobId)->orderBy('id','desc')->first();
                $u = new stdClass;
                $u->id=$work->jobId;
                if(empty($sms)){
                    $u->msg='';
                }
                else{
                    $u->msg=$sms->sms;
                }

                array_push($messages, $u);
            }

            return view('admin.jobfinised', compact('finshedwork','messages'));
    }

    public function ClientInfoClient(Request $r){
        $user=User::findOrFail(Auth::user()->user_id);
        $user->email=$r->email;
        $user->username=$r->email;
        $user->username=$r->email;
        $user->company_name=$r->company_name;
        $user->contact_no=$r->contact_no;
        $user->save();

        Session::flash('message', 'Profile Updated Successfully');

        return back();
    }
    public function viewclient()
    {
        if(Auth::user()->user_type ==USERTYPE[2]){
            $user=User::findOrFail(Auth::user()->user_id);
//            return $user;
            return view('client.clientInfo')->with('user',$user);
        }
        else{
            $client_view = (new Admin)->clientinfoview();
        }


        return view('admin.viewallclient', compact('client_view'));

    }

    public function clientinfo(Request $request)
    {

//        $type = session('user-type');
//        if ($type == 'Admin') {

            $id = $request->id;

            $client_view = (new Admin)->viewclient($id);
            return view('admin.clientinfo', compact('client_view'));
            //echo $id;
//        } else {
//            return redirect(url('/'));
//        }
    }

    public function updateclientinfo(Request $request)
    {
        $type = session('user-type');
        if ($type == 'Admin') {


            $id = $request->userid;
            $type = $request->usertype;
            $company_name = $request->clientname;
            $contact_person = $request->contact;
            $contact_number = $request->number;
            $email = $request->email;
            $address = $request->address;
            $web = $request->web;

            //$update = (new Admin)->updateclient($id, $type, $company_name, $contact_person, $contact_number, $email, $address, $web);

            try {
                $update = (new Admin)->updateclient($id, $type, $company_name, $contact_person, $contact_number, $email, $address, $web);

                echo "<script type=\"text/javascript\">
				alert(\"Information Updated Successfully\");
				
				window.location=\"/demo/demo11/ClientInfo\";
				</script>";
                //return redirect(url(url));


            } catch (Exception $e) {

                echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/demo/demo11/ClientInfo\";
				</script>";
                //return redirect(url('/ClientInfo'));
            }



        } else {
            return redirect(url('/'));
        }
    }

    public function passchange()
    {
        $type = session('user-type');
        if ($type == 'Admin') {
//            $getinfo = (new Admin)->getinfo();
            $getinfo = User::get();
            return view('admin.user_info_password', compact('getinfo'));
        }
        else {


            $getinfo= User::where('user_id',Auth::user()->user_id)->get();

            return view('admin.user_info_password', compact('getinfo'));
        }
    }
    public function changeuserpass($id)
    {

            $getpass = (new Admin)->getpass($id);
            return view('admin.passwordchange', compact('getpass'));

    }
    public function changepass(Request $request)
    {
        $type = session('user-type');
        if ($type == 'Admin') {

            $id = $request->id;
            //$name=$request->aname;

            $pass = $request->NP;
            $conpass = $request->CNP;




            if ($pass == $conpass) {


                try {
                    $changepass = (new Admin)->changepass($id, $pass);
                    Session::flash('message', 'Password Changed Successfully');

                    echo "<script type=\"text/javascript\" >
				        alert(\"Password Changed Successfully\");
				</script>";
                    //return redirect(url('/PasswordChange'));

                } catch (Exception $e) {

                    echo "<script type=\"text/javascript\" >
				        alert(\"Something Went Wrong\");
				window.location=\"/demo/demo11/PasswordChange\";
				</script>";
                    //return redirect(url('/PasswordChange'));

                }


            } else {

                echo "<script type=\"text/javascript\" >
				alert(\"Password and Confirm Password doesn't match.please try again\");
				</script>";

                //return redirect(url('/PasswordChange'));
            }
            return back();
        }
        else if(Auth::user()->user_type == USERTYPE[2]){

            $pass = $request->NP;
            $conpass = $request->CNP;




            if ($pass == $conpass) {


                try {
                    $changepass = (new Admin)->changepass(Auth::user()->user_id, $pass);
                    echo "<script type=\"text/javascript\" >
				        alert(\"Password Changed Successfully\");
				</script>";
                    //return redirect(url('/PasswordChange'));

                } catch (Exception $e) {

                    echo "<script type=\"text/javascript\" >
				        alert(\"Something Went Wrong\");
				window.location=\"/demo/demo11/PasswordChange\";
				</script>";
                    //return redirect(url('/PasswordChange'));

                }


            } else {

                echo "<script type=\"text/javascript\" >
				alert(\"Password and Confirm Password doesn't match.please try again\");
				</script>";

                //return redirect(url('/PasswordChange'));
            }
            return back();

        }
        else {
            return redirect(url('/'));
        }
    }
    public function servicedelete($id)
    {


        $type = session('user-type');
        if ($type == 'Admin') {


            try {
                $del_service = (new Admin)->delete_service($id);
                echo "Service deleted successfully";

            } catch (Exception $e) {

                echo "There is an issue. Please Refresh the page and try again.";
            }

//        if (count($del_service)!=''){
//
//            echo "Service deleted successfully";
//        }
//        else{
//            echo "Something Wrong.please try again";
//        }
            //return view('admin.passwordchange',compact('getpass'));
        }
        else {
            return redirect(url('/'));
        }
    }

    public function jobreqdelete($id)
    {
        $type = session('user-type');
        if ($type == 'Admin') {

            $job=Job::findOrFail($id);
            if($job->category=='brochure'){
                Brochure::where('jobId',$job->jobId)->delete();
                Image::where('jobId',$job->jobId)->delete();
            }
            elseif($job->category=='website'){
                Website::where('jobId',$job->jobId)->delete();
                Image::where('jobId',$job->jobId)->delete();

            }
            elseif($job->category=='leaflet'){
                Leaflet::where('jobId',$job->jobId)->delete();
                Image::where('jobId',$job->jobId)->delete();

            }
            elseif($job->category=='banner'){
                Banner::where('jobId',$job->jobId)->delete();
                Image::where('jobId',$job->jobId)->delete();

            }
            elseif($job->category=='corporate'){
                Corporate::where('jobId',$job->jobId)->delete();
                Image::where('jobId',$job->jobId)->delete();

            }
            elseif($job->category=='logo'){
                Logo::where('jobId',$job->jobId)->delete();
                Image::where('jobId',$job->jobId)->delete();

            }
            $job->delete();
        }
        else {
            return redirect(url('/'));
        }
    }




}
