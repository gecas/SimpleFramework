<?php

class Session {

	public static function getMessages()
	{
		$messages = (isset($_SESSION['messages']) ? $_SESSION['messages'] : array());
		unset($_SESSION['messages']);
		return $messages;
	}

	public static function setMessage($message = array('message' => '', 'type' => '', 'title' => ''))
	{
		if(!isset($_SESSION['messages'])){
		    $_SESSION['messages'] = array();
		}
		array_push($_SESSION['messages'], $message);
		return $this;
	}
}