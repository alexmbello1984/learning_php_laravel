<?php
class RequestUrl {

	protected $url;

	public function __construct( $url )
	{
		$this->url = $url;
	}

	//getters vars
	public function getUrl()
	{
		return $this->url;
	}
}