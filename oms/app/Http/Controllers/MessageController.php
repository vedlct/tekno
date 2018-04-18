<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use League\Flysystem\Exception;
use App\Notification;
use App\User;
use DB;

class MessageController extends Controller
{
    protected function showAdminsms(){

        $client_unseen=(new Message)->getClientunseen();
        $client_seen=(new Message)->getClientseen();
        return view('admin.message',compact('client_unseen','client_seen'));

    }

    public function getNotification(Request $r){
        $notification= \App\Notification::where('userId',Auth::user()->user_id)
            ->where('seen',0)->count();

        return $notification;
    }

    protected function showsmsuser($client1){

        $client_view=(new Message)->getClientsms($client1);

       // dd($client_view) ;

        return view('message',compact('client_view','client1'));

    }
    protected function clientname(){

        $client_name=(new Message)->getClientname();
        return view('admin.newmessage',compact('client_name'));

    }


    public function showMessageBody($client1){

        //$client1= $request->client;

        $sms=(new Message)->getSms($client1);


        return view('messagebody' ,compact('sms','client1'));

    }
    public function inputsms( Request $request,$client1) {


        $text= $request->sms;

        try{
            $save= (new Message())->insertsms($text,$client1);
            //return redirect()->route('usersms',[$client1]);
            $getlivemsgdata=(new Message)->getClientsmslive($client1);
            return view('newmessagedata',compact('getlivemsgdata','client1'));


        }
        catch (Exception $e){
            echo "There is an issue. Please Refresh the page and try again.";
        }
       // echo $text;
    }

    public function jobcomment(Request $request){

        $jobId= $request->id;

        $jobcomment=(new Message)->comment($jobId);


//        $affected = DB::table('table')->update(array('confirmed' => 1));
        $notification=Notification::where('userId',Auth::user()->user_id)
                                    ->where('jobId',$jobId)->update(['seen' => 1]);

       // echo $jobcomment;
        return view('allcomment' ,compact('jobcomment','jobId'));

    }


    public function insert_job_comment(Request $request,$jobId){


        $text= $request->sms;



        try
        {
            $jobcomment=(new Message)->insert_comment($jobId,$text);
//            $type=session('user-type');


//            if ($type == "User") {
//                echo "<script type=\"text/javascript\">
//				alert(\"Comment Added on This Job Successfully.\");
//				//window.location.replace('/Home');
//				</script>";
//
//            }
//            elseif ($type == "Admin")
//            {
//                echo "<script type=\"text/javascript\">
//				alert(\"Comment Added on This Job Successfully.\");
//				//window.location.replace('/Home');
//				</script>";
//
//            }



            $users= DB::table('user')
                ->select('user_id','username')
                ->get();

            foreach ($users as $user) {
                $notification=new Notification;
                $notification->name=$user->username;
                if(Auth::user()->user_id == $user->user_id){
                    $notification->seen=1;
                }
                else{
                    $notification->seen=0;
                }

                $notification->userId=$user->user_id;
                $notification->jobId=$jobId;
                $notification->save();


            }



            return redirect()->route('ongoingjob');

        }
        catch (Exception $e)
        {
            echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location.replace('/Home');
				</script>";
            //return redirect(url('/'));
        }


    }


    public function insertmessage(Request $request){

        $client1= $request->reciever;
        $text= $request->sms;
    try
    {
        $sendmsg = (new Message)->insertsms($text, $client1);
        return redirect(route('adminsms'));
    }
    catch (Exception $e)
    {
        echo "There is an issue. Please Refresh the page and try again.";
    }

    }


    public function getNotifAdmin() {

        try{
            $NotifAdminCount=(new Message)->getNotifAdmin();

            foreach ($NotifAdminCount as $n){
                echo $n->total;
            }

        }
        catch (Exception $e){

            echo "There is an issue. Please Refresh the page and try again.";
        }

    }
    public function getNotifUser() {

        try{
            $NotifUserCount=(new Message)->getNotifUser();

            foreach ($NotifUserCount as $n){
                echo $n->total;
            }

        }
        catch (Exception $e){

            echo "There is an issue. Please Refresh the page and try again.";
        }

    }

    public function getlivemsg(Request $request) {

        $sender=$request->sender;
        $reciever=$request->reciever;

        try{
            $getlivemsg=(new Message)->getlivemsg($sender,$reciever);

            foreach ($getlivemsg as $n){
                echo $n->total;
            }


        }
        catch (Exception $e){

            echo "There is an issue. Please Refresh the page and try again.";
        }
        //echo $reciever;




    }

    public function getlivemsgdata (Request $request) {

        $sender=$request->sender;
        $reciever=$request->reciever;

        try{
            $getlivemsgdata=(new Message)->getlivemsgdata($sender,$reciever);

            return view('newmessagedata',compact('getlivemsgdata'));


        }
        catch (Exception $e){

            echo "There is an issue. Please Refresh the page and try again.";
        }
       // echo $reciever;







    }

}
