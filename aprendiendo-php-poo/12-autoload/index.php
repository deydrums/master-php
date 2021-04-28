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


    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($usuario)
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getEntrada()
    {
        return $this->entrada;
    }

    public function setEntrada($usuario)
    {
        $this->entrada = $entrada;

        return $this;
    }

}


// Objeto principal
$principal = new Principal();
var_dump($principal->usuario);
$metodos = get_class_methods($principal);
$busqueda = array_search('setEntrada',$metodos);
var_dump($busqueda);

// Objeto otro paquete
$usuarios = new UsuarioAdmin();
var_dump($usuarios);

// Comprobar si existe una clase 
$clase = class_exists('MisClases\Usuario');

if ($clase) {
    echo '<h1>La clase si existe</h1>';
}else{
    echo '<h1>La clase no existe</h1>';



}


?>