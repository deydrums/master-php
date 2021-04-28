<?php 


class Usuario{
	public $nombre;
	public $email;

	public function __construct(){ 
		$this->nombre = "David Garcia <br>";
		$this->email = "dagarcia100@gmail.com <br>";
		echo "Creando el objeto <br>";
	}

	public function __destruct(){
		echo "Destruyendo el objeto <br>";   	
	}

	public function __toString (){  
		return "Hola, ".$this->nombre." Estas registrado con ".$this->email;
	}
	 	
}


 



$usuario = new Usuario();
echo $usuario;
echo $usuario->email;


/*
for ($i=0; $i <=200 ; $i++) { 
	echo $i."<br>";
}
*/
 ?>