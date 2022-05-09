<?php 

include_once __DIR__ . "/Product.php";

class Toy extends Product {
    protected $productName;
    protected $price;
    protected $isAvailable;
    protected $barCode;


    function __construct($productName, $price, $isAvailable, $barCode, $isRefoundable, $type){
        parent::__construct($isRefoundable, $type);
        $this->productName=$productName;
        $this->price=$price;
        $this->isAvailable=$isAvailable;
        $this->barCode=$barCode;
    }



}


?>