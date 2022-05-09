<?php 

//Le proprietà dello shop saranno protected (al max private) perché non vogliamo fare accedere da fuori.
class AnimalShop {
    protected $name;
    protected $url;
    protected $contacts;
    protected $iban;
    protected $headquarter;
    protected $chief;
    protected $canExportAbroad;



    /**
     *  ***********CREATE A NEW ANIMALSHOP INSTANCE************** 
     *
     * @param  string $name
     * @param  string $url
     * @param  mixed $contacts
     * @param  mixed $iban
     * @param  string $headquarter
     * @param  string $chief
     * @param  bool $canExportAbroad
     * @return void
     */

    function __construct($name, $url, $contacts, $iban, $headquarter, $chief, $canExportAbroad){
        $this->name = $name;
        $this->url = $url;
        $this->contacts = $contacts;
        $this->iban = $iban;
        $this->headquarter = $headquarter;
        $this->chief = $chief;
        $this->canExportAbroad = $canExportAbroad;
    }
}

?>