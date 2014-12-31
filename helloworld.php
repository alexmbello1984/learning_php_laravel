<?php 
	require "config.php";
	require "helpers.php";
	
	$confidential = "Esta variable es confidencial";
	$language = "PHP"; 
	$title = "learning_laravel";
	view( 'view' , compact( 'language' , 'title') );