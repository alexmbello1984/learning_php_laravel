<?php
class PlainTextView extends Response{

	protected $text ;

	public function __construct( $text )
	{
		$this->text = $text;
	}

	public function execute()
	{
		echo $this->text;
	}
}