<?php 
	//decimos a PHP que nos muestre todos los errores
	ini_set('display_errors',true);
	error_reporting(E_ALL);

	$confidential = "Esta variable es confidencial";
	$language = "PHP"; 


	function view($language)
	{
		require "view.php";	
	}
	
    view($language);