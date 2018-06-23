<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
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
        return view('chat.chat');
   }

   public function sentMsg(Request $r){
       $chat=new Chat();
       $chat->msg=$r->msg;
       $chat->userFrom=Auth::user()->user_id;
       if(Auth::user()->user_type !=USERTYPE[2]){
           //Send Msg To User
       }
       $chat->save();

       $chat=Chat::findOrFail($chat->chatId);


       return $chat;
   }
}
