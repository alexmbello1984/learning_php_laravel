<?php

class View extends Response {

	protected $template;
	protected $vars 			= array();
	protected $defaultLayout 	= 'layout';
	protected $layout;

	public function __construct( $template, $vars = array() )
	{
		$this->template = $template;
		$this->vars 	= $vars;	
		$this->layout 	= $this->defaultLayout;
	}

	public function execute()
	{
		$template 	= $this->getTemplate();
		$vars 		= $this->getVars();
		
		call_user_func(function() use ($template, $vars){
			extract( $vars );
			//paramos la salida de texto para poderla capturar y enviar a una variable
			ob_start();
			require $this->getTemplateFileName( $template );	
			$tpl_content = ob_get_clean();
			require $this->getTemplateFileName( $this->getLayout() );
		});
	}

	public function getNameView( $template )
	{
		return Inflector::camel($template);
	}

	public function getTemplateFileName( $template )
	{
		return 'views/' . $this->getNameView( $template ) . '.tpl.php';
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

	public function getLayout()
	{
		return $this->layout;
	}
}