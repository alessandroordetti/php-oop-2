



<?php
/*Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.*/


//Le proprietà dello shop saranno protected (al max private) perché non vogliamo fare accedere da fuori.
class Shop {
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
     * @param  string $name  The name of the shop
     * @param  string $url  The url of the page
     * @param  mixed $contacts  The contacts of the shop
     * @param  mixed $iban  The IBAN og the shop
     * @param  string $headquarter  The location of the headquarter
     * @param  string $chief  The Chief's name
     * @param  bool $canExportAbroad    The possibility to export the product abroad
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