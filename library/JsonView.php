<?php
class JsonView extends Response{
	
	protected $array_data = array();

	public function __construct( $array_data)
	{	
		$this->array_data = $array_data;
	}

	public function execute()
	{
		echo json_encode( $this->array_data );
	}
}