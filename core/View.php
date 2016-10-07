<?php

class View
{
	private $_views_path = "views/";

	public function render($view){
		require $this->_views_path.$view;
	}
}