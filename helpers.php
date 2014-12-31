<?php
/**
 * Renderiza cualquier vista
 * @param string $template Es el nombre de la vista
 * @param array $vars arreglo de variables que se pasaran a la vista
 * 
 */
function view( $template, $vars = array() )
{
	extract( $vars );
	require "views/$template.tpl.php";
}

function controller($name)
{
	$file_controller = 	"controllers/$name.php";
	if( !file_exists($file_controller) )
	{
		$file_controller = 	"controllers/404.php";
	}
	require $file_controller;	
}