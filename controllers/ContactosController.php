<?php 
class ContactosController {

	public function indexAction()
	{
		return new View('contactos');
	}

	public function cityAction( $city )
	{
		return [['nombre'=>'alexander', 'github'=>'alexmbello1984'],['nombre'=>'mejorandola', 'github'=>'mejorandola']];
	}
}