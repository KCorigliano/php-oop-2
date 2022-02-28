<?php

require_once __DIR__ . "/product.php";

class Food extends product{
    protected $size;
    protected $expDate;

    function __construct($size, $expDate, $price, $name, $brand){
        parent::__construct($price, $name, $brand);
        $this->size = $size;
        $this->expDate = $expDate;
    }

}

$croccantini = new Food( "30Kg", "15/04/2022", 22, "Croccantini per cani", "Crocantos");

var_dump($croccantini);