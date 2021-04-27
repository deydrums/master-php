<?php 
class Usuario{
	const URL_COMPLETA = "http://localhost";
	public $email;
	public $password;


public function getEmail() 
{ 
	return $this->email; 
} 

public function setEmail($email) 
{ 
	$this->email = $email; 
	return $this; 
} 

public function getPassword() 
{ 
	return $this->password; 
} 

public function setPassword($password) 
{ 
	$this->password = $password; 
	return $this; 
} 



}

$usuario = new Usuario();
echo $usuario::URL_COMPLETA;
var_dump($usuario);

echo Usuario::URL_COMPLETA;


 ?>