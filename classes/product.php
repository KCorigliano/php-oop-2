<?php

class product {
    protected $price;
    protected $name;
    protected $brand;

    function __construct($price, $name, $brand)
    {
        $this->price = $price;
        $this->name = $name;
        $this->brand = $brand;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }
}