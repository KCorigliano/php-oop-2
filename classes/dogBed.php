<?php

require_once __DIR__ . "/product.php";

class DogBed extends product{
    protected $size;
    protected $material;

    function __construct($size, $price, $name, $brand, $material){
        parent::__construct($price, $name, $brand);
        $this->size = $size;
        $this->material = $material;
    }

}

$clothBed = new DogBed( "40cmx30cm", 55, "Cuccia di stoffa", "Asbro", "stoffa");

var_dump($clothBed);