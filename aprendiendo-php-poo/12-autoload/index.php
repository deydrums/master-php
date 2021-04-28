<?php 
require_once "autoload.php";

/*
$usuario = new Usuario();
echo $usuario->nombre;
echo "<br/>";
echo $usuario->email;

$categoria = new Categoria();
echo "<br/>";
echo $categoria->nombre;
*/
//ESPACIOS DE NOMBRES Y PAQUETES
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada, PanelAdministrador\Usuario AS UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
        //new MisClases\Usuario();
    }
}


// Objeto principal
$principal = new Principal();
var_dump($principal->usuario);

// Objeto otro paquete
$usuarios = new UsuarioAdmin();
var_dump($usuarios);


?>