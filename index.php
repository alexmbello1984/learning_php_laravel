<?php
/**
 * El frontend Controller se encarga de configurar la app
*/
//general
require 'config.php';
require 'helpers.php';

//library
require 'library/RequestUrl.php';
require 'library/Request.php';
require 'library/Inflector.php';
require 'library/Response.php';
require 'library/View.php';
require 'library/JsonView.php';
require 'library/PlainTextView.php';


//lamar a los controladores indicado
if( empty($_GET['url']) )
{
	$url = "";
}
else
{
	$url = $_GET['url'];
}	

$requestUrl = new RequestUrl( $url );
$request = new Request( $requestUrl );
$request->execute();