<?php

require_once __DIR__ . "/user.php";
require_once __DIR__ . "/game.php";
require_once __DIR__ . "/product.php";

class subUser extends anonymUser{
    protected $email;
    protected $age;
    protected $subscribed = true;
    protected $sale;

    function __construct($email, $age, $shoppingKart, $card,  $subscribed){
        parent::__construct($shoppingKart, $card, $subscribed);
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

$subscribedUser = new subUser( "aiuyfg@ghiw.com", 25, $ossoCani, 156354, true);

var_dump($subscribedUser);