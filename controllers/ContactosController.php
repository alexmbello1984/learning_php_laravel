<?php 
class ContactosController {

	public function indexAction()
	{
		return new View('contactos', ['title'=>'MejorandoPHP', 'language' => 'php']);
	}

	public function cityAction( $city )
	{
		return "contactos de " . $city;
	}
}