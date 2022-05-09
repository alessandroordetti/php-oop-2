<?php 

class Product {
    protected $isRefoundable;
    protected $type;

    function __construct($isRefoundable, $type){
        $this->isRefoundable=$isRefoundable;
        $this->type=$type;
    }
}


?>