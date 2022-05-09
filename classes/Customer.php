<?php 

include_once __DIR__ . "/User.php";

class Customer extends User {
    protected $name;
    protected $age;
    protected $email;
    protected $password;

    function __construct($name, $age, $email, $password, $userName, $isOnline, $preferences) {
        parent::__construct($userName, $isOnline, $preferences);
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->password = $password;
    }
}

?>