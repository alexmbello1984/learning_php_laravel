<?php
/**
 * El frontend Controller se encarga de configurar la app
*/
require "config.php";
require "helpers.php";


//lamar a los controladores individuales
// index.php si la persona invoca asi enviamos ahome
if( empty($_GET['url']) )
{
	require "controllers/home.php";
}	
// index.php?url=contactos
else if( $_GET['url'] == "contactos")
{
	require "controllers/contactos.php";
}else{
	require "controllers/404.php";
}


