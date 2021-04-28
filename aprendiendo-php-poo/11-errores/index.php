<?php 


//Capturar excepciones en codigo suceptible a errores

try {
    if (isset($_GET['id'])) {
        echo "<h1>El parametro es: {$_GET['id']}</h1>";
    }else{
    throw new Exception("Faltan parametros por la URL", 1);
    }
} catch (Exception $e) {
    echo "Ha habido un error ".$e->getMessage();
}

 ?>

 