<?php 

class User {
    protected $name;
    protected $lastname;
    protected $age;
    protected $email;
    protected $userName;
    protected $isOnline;
    protected $preferences;

    function __construct($name, $lastname, $age, $email, $userName, $isOnline, $preferences){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->email = $email;
        $this->userName = $userName;
        $this->isOnline = $isOnline;
        $this->preferences = $preferences;
    }
}

?>