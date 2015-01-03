<?php
/**
 * El frontend Controller se encarga de configurar la app
*/
require "config.php";
require "helpers.php";

//lamar a los controladores indicado
controller($_GET['url']);
