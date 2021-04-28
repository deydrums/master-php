<?php 

interface Ordenador{
	public function encender();
	public function apagar();
	public function reiniciar();
	public function desfragmentar();
	public function detectarUSB();
	
}

class iMac implements Ordenador{
	private $modelo;

	public function getModelo() 
	{ 
		return $this->modelo; 
	} 
	
	public function setModelo($modelo) 
	{ 
		$this->modelo = $modelo; 
		return $this; 
	} 

	public function encender(){
		return "Lo que sea ";    	
	}

	public function apagar(){
		return "Lo que sea ";	    	
	}
	 
	public function reiniciar(){
		return "Lo que sea ";	    	
	}
	 
	public function desfragmentar(){
		return "Lo que sea ";	    	
	}
	 
	public function detectarUSB(){
		return "Lo que sea "; 	  	
	}
	  
	
}

$maquintos = new iMac();
$maquintos->setModelo("Macbook pro 2021");
echo $maquintos->getModelo();
var_dump($maquintos);

 ?>