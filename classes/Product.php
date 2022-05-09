<?php 

class Product {
    protected $productName;
    protected $barCode;
    protected $isAvailable;
    protected $price;
    protected $isRefoundable;
    protected $type;

    function __construct($productName, $barCode, $isAvailable, $price, $isRefoundable, $type){
        $this->productName=$productName;
        $this->barCode=$barCode;
        $this->isAvailable=$isAvailable;
        $this->price=$price;
        $this->isRefoundable=$isRefoundable;
        $this->type=$type;

    }
}


?>