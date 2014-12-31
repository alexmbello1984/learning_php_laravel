<?php 
	
	$confidential = "Esta variable es confidencial";
	$language = "PHP"; 
	$title = "learning_laravel";
	view( 'home' , compact( 'language' , 'title') );