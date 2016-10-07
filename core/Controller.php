<?php

namespace App\Core;

class Controller
{
	protected $_view = null;
	
	public function __construct()
	{
		$this->_view = new View;
	}
}