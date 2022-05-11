<?php 

include_once __DIR__ . "/Product.php";

class Toy extends Product {
    protected $isAvailable;
    protected $barCode;

    function __construct($productName, $price, $description,$isRefoundable, $isAvailable, $barCode){
        parent::__construct($productName, $price, $description, $isRefoundable);
        $this->isAvailable=$isAvailable;
        $this->barCode=$barCode;
    }

}


?>