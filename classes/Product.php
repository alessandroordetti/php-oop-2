<?php 

class Product {
    protected $productName;
    protected $price;
    protected $description;
    protected $isRefoundable;

    function __construct($productName, $price, $description, $isRefoundable){
        $this->productName = $productName;
        $this->price = $price;
        $this->description = $description;
        $this->isRefoundable=$isRefoundable;
    }

    public function getProductName(){
        return $this->productName;
    }
    
    public function getPrice(){
        return $this-> price;
    }

}
?>