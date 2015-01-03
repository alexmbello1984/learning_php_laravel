<?php
/**
 * La peticion representa una peticion HTTP 
 * parte de una URL 
 */
 
class Request {

	protected $url;

	public function __construct( $url )
	{
		$this->url = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

}