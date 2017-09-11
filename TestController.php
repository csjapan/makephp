<?php
namespace APP\Controller;
use system\controller\controller;
	class TestController extends controller
	{
		function TestController(){
			
		}
		function Index()
		{
			echo "The Index action of TestController!"."<br/>";
		}
		function printStr()
		{
			echo "print action of TestController!"."<br/>";
		}
	}
?>