<?php

namespace controller;

include "_pilarMVC/controller.php";

class HomeController extends Controller{
	
	protected function httpGetRequest()
	{
		include "./view/helloWorld.php";
	}
	
	protected function httpPostRequest()
	{
		echo "Not implemented";
	}

}

$controller = new HomeController();

?>
