<?php 

class NotaController{
    public function listar(){
        //Modelo
        require_once 'models/nota.php';
        //Logica de la accion del controlador
        $nota = new Nota();
        // Vista
        $notas= $nota->conseguirTodos('notas');
        require_once 'views/nota/listar.php';
       
    }

    public function crear(){
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setUsuario_id("1");
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripcion de mi nota");
        $guardar = $nota->guardar();

        header("Location: index.php?controller=Nota&action=listar");
        

    }

    public function borrar(){

    }


}


?>