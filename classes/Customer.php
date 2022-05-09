<?php 

include_once __DIR__ . "/User.php";

class Customer extends User {
    protected $name;
    protected $age;
    protected $email;
    protected $password;
    protected $isRegistered;
    protected $discount;

    function __construct($name, $age, $email, $password, $isRegistered, $discount, $userName, $isOnline, $preferences) {
        parent::__construct($userName, $isOnline, $preferences);
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->password = $password;
        $this->isRegistered = $isRegistered;
        $this->discount = $discount;
    }

    function getDiscount(){
        if($this->isRegistered === true){
            return 'L\'utente ha diritto al 20% di sconto';
        } else {
            return 'L\'utente non ha diritto a sconti';
        }
    }

    function getName(){
        return $this->name;
    }
}

?>