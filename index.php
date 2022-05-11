
<?php 

    include_once __DIR__ . "/classes/Shop.php";
    include_once __DIR__ . "/classes/Toy.php";
    include_once __DIR__ . "/classes/Customer.php";

    $caniniGattiniShop = new Shop ("Canini e Gattini carini", "www.caniniegattini.com", 'caniegatti@gmail.com', 'IT000E444W', 'Roma (Italia), Via Del Campo 45', 'Pedro La Cipolla', true);

    $bone = new Toy ('Osso biricchino', 40, 'Gioco per cani', true, 'FNJEDF32', true);

    $userBanana33 = new Customer ('Checco', 'Zalone', 27, 'banana33@gmail.com','Banana33', true, null, true, null, 100);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
        var_dump($caniniGattiniShop);
        var_dump($bone);
        var_dump($userBanana33);

        echo $userBanana33->getName();    

        
    ?>

    <br>

    <?php 
        echo $userBanana33 -> getDiscount()
    ?>

    <br>

    <?php 
        if($bone instanceof Product){
            echo $bone -> getProductName() . ' ';
        }

        if($bone instanceof Toy){
            echo $bone -> getProductName();
        }
    ?>

    <br>

    <?php 
        echo 'Ciao ' . $userBanana33-> getName() . ' , hai appena comprato osso biricchino dal costo di 25€. Ti restano ' . $userBanana33->payOrder($bone->getPrice()) . '€ di credito residuo sulla carta.';
    ?>

    <br>

    <?php 
    
        echo 'Il prezzo totale è: € ' . $bone -> getPrice();

    ?>
</body>
</html>