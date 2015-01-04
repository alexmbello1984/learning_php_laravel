<?php 
class ContactosController {

	public function indexAction()
	{
		return new View('contactos',['title'=>'Lista de Contactos']);
	}

	public function cityAction( $city )
	{
		return new JsonView( [
								['nombre'=>'alexander', 'github'=>'alexmbello1984'],
								['nombre'=>'mejorandola', 'github'=>'mejorandola']
							 ] );
	}
}