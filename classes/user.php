<?php

class anonymUser {
    protected $shoppingKart;
    protected $card;
    protected $name;    

    function __construct($shoppingKart, $card, $name){
        $this->shoppingKart = $shoppingKart;
        $this->card = $card;
        $this->name = $name;
    }

    /**
     * Get the value of shoppingKart
     */ 
    public function getShoppingKart()
    {
        return $this->shoppingKart;
    }

    /**
     * Get the value of card
     */ 
    public function getCard()
    {
        return $this->card;
    }
}