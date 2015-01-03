<?php
/**
 * El frontend Controller se encarga de configurar la app
*/
//general
require 'config.php';
require 'helpers.php';

//library
require 'library/Request.php';

//lamar a los controladores indicado
if( empty($_GET['url']) )
{
	$url = "";	
}
else
{
	$url = $_GET['url'];
}	

$request = new Request( $url );