<?php

class View extends Response {

	protected $template;
	protected $vars = array();

	public function __construct( $template, $vars = array() )
	{
		$this->template = $template;
		$this->vars = $vars;	
	}

	public function execute()
	{
		$template = $this->getTemplate();
		$vars = $this->getVars();

		call_user_func(function() use ($template, $vars){
			extract( $vars );
			//paramos la salida de texto para poderla capturar y enviar a una variable
			ob_start();
			require "views/$template.tpl.php";	
			$tpl_content = ob_get_clean();
			require "views/layout.tpl.php";
		});
	}

	//getter
	public function getTemplate()
	{
		return $this->template;
	}

	public function getVars()
	{
		return $this->vars;
	}
}