<?php

require_once __DIR__ . "/product.php";

class Game extends product{
    protected $size;

    function __construct($size){
        parent::__construct(15, "Osso per cani", "Asbro");
        $this->size = $size;
    }

}

$ossoCani = new Game( "15cmx30cmx5cm");

var_dump($ossoCani);