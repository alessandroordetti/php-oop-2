<?php 

class User {
    protected $userName;
    protected $isOnline;
    protected $preferences;

    function __construct($userName, $isOnline, $preferences){
        $this->userName = $userName;
        $this->isOnline = $isOnline;
        $this->preferences = $preferences;
    }
}

?>