<?php

class anonymUser {
    protected $email;
    protected $shoppingKart;
    protected $card; 

    function __construct($email, $shoppingKart, $card)
    {
        $this->email = $email;
        $this->shoppingKart = $shoppingKart;
        $this->card = $card;
    }
    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
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