<?php 
//PROGRAMACION ORIENTADA A OBJETOS EN PHP (POO)

// Definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)

class Coche{


	//Atributos o propiedades (Variables)
	public $color = 'Rojo';
	public $modelo = 'Aventador';
	public $velocidad = 300;
	public $marca = 'Ferrari';
	public $caballaje = 500;
	public $plazas = 2;

	//Metodos, son acciones que hace el objeto (antes funciones)
	public function getColor(){
		//Busca en esta clase la propiedad x
		return $this->color;
	}


	public function setColor($color){
		$this->color = $color;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function acelerar(){
		$this->velocidad++;
	}

	public function frenar(){
		$this->velocidad--;
	}

	public function getVelocidad(){
		return $this->velocidad;
	}


} //Fin definicion de la clase

//Crear un objeto / Instanciar la clase

$coche = new Coche();

//Usar los metodos
echo $coche->getVelocidad().'<hr>';


$coche->setColor("Amarillo");
echo 'El color del coche es: '.$coche->getColor().'<hr>';


$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "La velocidad del coche es: ".$coche->getVelocidad().'<hr>';


$coche2 = new Coche();
$coche2 -> setColor('Verde');
$coche2 -> setModelo('Gallardo');
var_dump($coche);
var_dump($coche2);

 ?>