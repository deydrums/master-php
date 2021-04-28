<?php 


/*Definir una serie de metodos para compartirlo entre diferentes clases*/

trait Utilidades{
	public function mostrarNombre(){
		echo "<h1>El nombre es ".$this->nombre."</h1>";
	}
	 
}

class Coche{
	public $nombre;
	public $marca;

	use Utilidades;
}

class Persona{
	public $nombre;
	public $apellidos;

	use Utilidades;
}


class VideoJuego{
	public $nombre;
	public $anio;

	use Utilidades;
}

$coche = new Coche();
$coche->nombre ="Ferrari testarosa";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre ="David Garcia";
$persona->mostrarNombre();

$videojuego = new VideoJuego();
$videojuego->nombre ="GTA V";
$videojuego->mostrarNombre();

 



 ?>