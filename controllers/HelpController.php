<?php

class HelpController{

	public function indexAction()
	{
		return new View('help',['title'=>'FAQ']);
	}
} 