<?php 
require_once 'models/pedido.php';

class PedidoController{
    public function hacer(){

        require_once 'views/pedido/hacer.php';
    }


    public function add(){
        if(isset($_SESSION['identity'])){
            $usuario_id = $_SESSION['identity']->id;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $stats = Utils::statsCarrito();
            $coste = $stats['total'];
            if($provincia && $localidad && $direccion){
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);
                $save = $pedido->save();
                //Guardar linea pedidos
                $save_linea= $pedido->save_linea();

                if($save && $save_linea) {
                    $_SESSION['pedido'] = 'complete';
                }else{
                    $_SESSION['pedido'] = 'failed';
                }
                

            }else{
                $_SESSION['pedido'] = 'failed';
            }

            header('Location:'.base_url.'pedido/confirmado');
            //Guardar datos en la base de datos

        }else{
            //Redirigir al index
            header("Location:".base_url);
        }
    }

    public function confirmado(){
        if(isset($_SESSION['identity'])){
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuario_id($identity->id);
            $pedido = $pedido->getOneByUser();

            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($pedido->id);
        }

        require_once('views/pedido/confirmado.php');
    }

    public function mis_pedidos(){
        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Pedido();
        //Sacar todos los pedidos del usuario
        $pedido->setUsuario_id($usuario_id);
        $pedidos = $pedido->getAllByUser();

        require_once('views/pedido/mis_pedidos.php');
    }

    public function detalle(){
        Utils::isIdentity();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            //Sacar el pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido = $pedido->getOne();
            //Sacar los productos
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($id);
            

            require_once('views/pedido/detalle.php');
        }else{
            header("Location:".base_url.'pedido/mis_pedidos');
        }
        
    }

}



?>