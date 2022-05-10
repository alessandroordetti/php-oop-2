<?php 

include_once __DIR__ . "/User.php";

class Customer extends User {
    protected $isRegistered;
    protected $discount;
    protected $creditCard;

    function __construct($name, $lastname, $age, $email,$userName, $isOnline, $preferences, $isRegistered, $discount, $creditCard) {
        parent::__construct($name, $lastname, $age, $email,$userName, $isOnline, $preferences);
        $this->isRegistered = $isRegistered;
        $this->discount = $discount;
        $this->creditCard = $creditCard;
    }

    public function getDiscount(){
        if($this->isRegistered === true){
            return 'L\'utente ha diritto al 20% di sconto perché è registrato.';
        } else {
            return 'L\'utente non ha diritto a sconti perché non è registrato.';
        }
    }

    public function getName(){
        return $this->name;
    }

    public function payOrder($productPrice){
        if($productPrice > $this->creditCard){
            return 'Non hai credito sufficiente per effettuare l\'acquisto.';
        } else {
            return $this -> creditCard - $productPrice;
        }
    }
}

?>