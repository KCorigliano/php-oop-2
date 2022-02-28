<?php

require_once __DIR__ . "/product.php";

class Game extends product{
    protected $size;

    function __construct($size, $price, $name, $brand){
        parent::__construct($price, $name, $brand);
        $this->size = $size;
    }

}

$ossoCani = new Game( "15cmx30cmx5cm", 15, "osso per cani", "Asbro");

var_dump($ossoCani);