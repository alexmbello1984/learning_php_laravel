<?php
/**
 * El frontend Controller se encarga de configurar la app
*/
require "config.php";
require "helpers.php";


//lamar a los controladores individuales
// index.php si la persona invoca asi enviamos ahome
if( empty($_GET['url']))
	$_GET['url'] = 'home';
controller($_GET['url']);

