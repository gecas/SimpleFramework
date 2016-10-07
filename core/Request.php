<?php

class Request
{
	public static function uri()
	{
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	}

	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	public function data($key = null)
	{
		$data = null;
		if ($key != null) {
			if (isset($_REQUEST[$key])) {
				$data = $_REQUEST[$key];
			}else{
				$data = null;
			}
		}elseif(!empty($_REQUEST)){
			$data = $_REQUEST;
		}else{
			$data = null;
		}

		return $data;
	}
}