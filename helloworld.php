<?php 
	$confidential = "Esta variable es confidencial";
	$language = "PHP"; 


	function view($language)
	{
		require "view.php";	
	}
	
    view($language);