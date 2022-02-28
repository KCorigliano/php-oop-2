<?php

require_once __DIR__ . "/subUser.php";

class subUser extends anonymUser{
    protected $email;
    protected $age;

    function __construct($email, $age){
        parent::__construct(15, "Osso per cani", "Asbro");
        $this->email = $email;
        $this->age = $age;
    }

}