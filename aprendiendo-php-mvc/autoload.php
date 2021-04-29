<?php 

function app_autoload($class) {
    include 'controllers/'.$class.'.php';
}

spl_autoload_register('app_autoload');
?>