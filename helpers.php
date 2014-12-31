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