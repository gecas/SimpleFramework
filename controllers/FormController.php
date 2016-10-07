<?php

namespace App\Controllers;

use App\Core\Controller;

class FormController extends Controller
{
	public function create(Request $request)
	{
		$email = $request->data('email');
		$to = "welcome@beehiveleaks.com";
		$subject = "New Subscriber";
		$txt = "You have a new subscriber - ".$email;
		$headers = "From: Beehiveleaks" . "\r\n" .
		"CC: welcome@beehiveleaks.com";

		$mail = mail($to,$subject,$txt,$headers);

		if($mail){
			Session::setMessage(array('title' => "Message", 'message' => "You have been sucessfully added to subscribers list!", "type" => "success"));
			Router::redirect("/");
		}else{
			Session::setMessage(array('title' => "Message", 'message' => "Something wrong happened! Try again after refreshing.", "type" => "danger"));	
			Router::redirect("/");
		}
	}
}
