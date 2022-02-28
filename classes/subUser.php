<?php

require_once __DIR__ . "/user.php";
require_once __DIR__ . "/game.php";
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/dogBed.php";

class subUser extends anonymUser{
    protected $email;
    protected $age;
    protected $subscribed = true;
    protected $sale = 20;

    function __construct($email, $age, $shoppingKart, $card,  $subscribed, $name){
        parent::__construct($shoppingKart, $card, $subscribed, $name);
        $this->email = $email;
        $this->age = $age;
        $this->subscribed = $subscribed;
    }

    /**
     * Get the value of subscribed
     */ 
    public function getSubscribed()
    {
        return $this->subscribed;
    }

}

$Piero = new subUser( "aiuyfg@ghiw.com", 25, [$ossoCani, $croccantini, $clothBed], 156354, true, "Piero");

var_dump($Piero);