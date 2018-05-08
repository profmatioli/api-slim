<?php
namespace MyApi\Controllers;

class CategoriaController
{
    private $categorias = array();

    public function __construct()
    {
        $this->categorias = array(1=>'Doces',2=>'Bebidas',3=>'Lanches');
    }
    public function get(){
        return $this->categorias;
    }
}