<?php 


class Usuario{
	public $nombre;
	public $email;

	public function __construct(){   	
		echo "Creando el objeto <br>";
	}

	public function __destruct(){
		echo "Destruyendo el objeto";   	
	}
	 	 

}

$usuario = new Usuario();

for ($i=0; $i <=200 ; $i++) { 
	echo $i."<br>";
}

 ?>