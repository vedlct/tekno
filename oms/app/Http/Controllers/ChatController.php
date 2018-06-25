<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\User;
use Auth;
class ChatController extends Controller
{
   public function index(){
       if(Auth::user()->user_type ==USERTYPE[2]){
           $chat=Chat::select('user.username','chat.chatId','chat.userFrom','chat.msg','chat.created_at')
               ->where('userFrom',Auth::user()->user_id)
               ->orWhere('userTo',Auth::user()->user_id)
               ->leftJoin('user','user.user_id','chat.userFrom')
               ->get();

           return view('chat.chat')
               ->with('chat',$chat);
       }

       else{
           $users=User::select('user_id','username')->where('user_id','!=',Auth::user()->user_id)
               ->get();


           return view('chat.adminChat')->with('users',$users);
       }


   }

   public function sentMsg(Request $r){


       $chat=new Chat();
       $chat->msg=$r->msg;
       $chat->userFrom=Auth::user()->user_id;
       if(Auth::user()->user_type !=USERTYPE[2]){
           //Send Msg To User
           $chat->userTo=$r->to;
       }
       $chat->save();

       $chat=Chat::findOrFail($chat->chatId);


       return $chat;
   }

   public function showMsg(Request $r){

       $user=User::findOrFail($r->id);
       if($user->user_type==USERTYPE[2]){
           $chat=Chat::select('user.username','chat.chatId','chat.userFrom','chat.msg','chat.created_at')
               ->where(function($q) use ($r){
                   $q->where('userFrom', Auth::user()->user_id)
                       ->orWhere('userFrom', $r->id);
               })
               ->where(function($q) use ($r){
                   $q->where('userTo', $r->id)
                       ->orWhere('userTo', null);
               })
               ->leftJoin('user','user.user_id','chat.userFrom')
               ->limit(20)
               ->orderBy('chatId','desc')
               ->get();
       }

       else{
           $chat=Chat::select('user.username','chat.chatId','chat.userFrom','chat.msg','chat.created_at')
               ->where(function($q) use ($r){
                   $q->where('userFrom', Auth::user()->user_id)
                       ->orWhere('userFrom', $r->id);
               })
               ->where(function($q) use ($r){
                   $q->where('userTo', $r->id)
                       ->orWhere('userTo',Auth::user()->user_id );
               })
               ->leftJoin('user','user.user_id','chat.userFrom')
               ->limit(20)
               ->orderBy('chatId','desc')
               ->get();
       }


       return $chat;

   }

   public function getUnseenMsg(Request $r){
       $chat=Chat::select('userFrom')
           ->where(function($q) {
           $q->where('userTo', Auth::user()->user_id)
               ->orWhere('userTo',null);
                    })
           ->where('seen',0)
           ->groupBy('userFrom')
           ->get();

       return $chat;
   }

   public function seenMsg(Request $r){
       if(Auth::user()->user_type==USERTYPE[2]){
           Chat::where('userTo', '=',Auth::user()->user_id)
               ->update(array('seen' => 1));

           return "Client";
       }
       else{
           Chat::where('userFrom', '=',$r->id)
               ->where(function($q) {
                   $q->where('userTo', Auth::user()->user_id)
                       ->orWhere('userTo',null);
               })
               ->update(array('seen' => 1));
       }


       return $r;
   }
}
