<?php 
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = 'David Garcia';
        $this->email = 'dagarcia100@gmail.com';
    }

}

?>