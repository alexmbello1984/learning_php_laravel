<?php
/**
 * La peticion representa una peticion HTTP 
 * parte de una URL 
 */
class Request {

	protected $RequestUrl;
	protected $defaultController = 'home';
	protected $controller;
	protected $defaultAction = 'index';
	protected $action;
	protected $params = array();

	/**
	 * Contructor de Request
	 */
	public function __construct( $requestUrl )
	{
		$this->requestUrl = $requestUrl;
		$segments = explode( '/' , $this->requestUrl->getUrl());
		$this->resolveController( $segments );
		$this->resolveAction( $segments );
		$this->resolveParams( $segments );
	}

	/**
	 * obtiene el nombre del controlador
	 */
	public function resolveController( &$segments )
	{
		//saco del arreglo el primer segmento
		$this->controller = array_shift( $segments );
		if( empty( $this->controller ) )
		{
			$this->controller = $this->defaultController;
		}
	}

	/**
	 * obtiene el nombre del accion
	 */
	public function resolveAction( &$segments )
	{
		//saco del arreglo el primer segmento
		$this->action = array_shift( $segments );
		if( empty( $this->action ) )
		{
			$this->action = $this->defaultAction;
		}
	}

	/**
	 * obtiene los parametros
	 */
	public function resolveParams( $segments )
	{
		$this->params = $segments;
	}

	/**
	 * Instanciar la clase dinamicamente Controlador
	 */
	public function execute()
	{
		$controllerFilename     = $this->getControllerFileName();
		$controllerClassName    = $this->getControllerClassName();
		$actionMethodName       = $this->getActionMethodName();
		$params                 = $this->getParams();

		if( ! file_exists( $controllerFilename ) )
		{
			exit ( "Controlador $controllerFilename no existe" );
		}

		require $controllerFilename;
		//creacion de un objeto dinamico
		$controller = new $controllerClassName;
		//ejecucion de un metodo dinamico
		$response = call_user_func_array( [$controller, $actionMethodName], $params);
		//$controller->$actionMethodName($params);
		//si tenemos la interfaz Response podemos llamar execute
		$this->executeResponse( $response);

	}

	public function executeResponse($response)
	{
		if(    $response instanceOf Response
			or $response instanceOf JsonView 
			or $response instanceOf PlainTextView )
		{
			$response->execute();
		}
		else
		{
			exit('La Respuesta No valida');
		}
	}

	//getters vars
	
	/**
	 * Nos permite saber cual es el segmento que contiene el contiene
	 * el nombre del controlador
	 */
	public function getController()
	{
		return $this->controller;
	}
	
	public function getAction()
	{
		return $this->action;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function getActionMethodName()
	{
		return Inflector::lowerCamel( $this->getAction() ) . 'Action';
	}
	
	/**
	 * Nos permite saber cual es el nombre de la clase del controlador
	 * Debe garantizar que si el controlador es multiword, 
	 * convertirlo a CamelCase
	 */
	public function getControllerClassName()
	{
		return Inflector::camel( $this->getController() ) . 'Controller';
	}

	
	/**
	 * Nos permite saber cual es archivo que contiene el controlador
	 */
	public function getControllerFileName()
	{
		return 'controllers/' . $this->getControllerClassName() . '.php';
	}
	
}