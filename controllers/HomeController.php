<?php 

class HomeController {

	public function indexAction()
	{
		return new View('home', ['title'=>'MejorandoPHP', 'language' => 'php']);
	}
}