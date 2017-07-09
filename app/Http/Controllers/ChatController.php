<?php

namespace App\Http\Controllers;
use Chat;
use Auth;
use App;
use Illuminate\Http\Request;

class ChatController extends Controller
{
	public function getAdd($id=0){
		$chat = App::make('chat');
		$conversation = Chat::conversation(2);
		//dd($conversation->id);
		Chat::send($conversation->id, 'Hello', $userId);
		echo $id;
	}
}
