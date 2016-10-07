<?php
class HomeController extends Controller
{
	public function index()
	{
		$this->_view->render("pages/index.view.php");
	}	

	public function test()
	{
		var_dump("test");
	}
}
