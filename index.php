
<?php 

    include_once __DIR__ . "/classes/Shop.php";
    include_once __DIR__ . "/classes/Toy.php";
    include_once __DIR__ . "/classes/Customer.php";

    $caniniGattiniShop = new Shop ("Canini e Gattini carini", "www.caniniegattini.com", 'caniegatti@gmail.com', 'IT000E444W', 'Roma (Italia), Via Del Campo 45', 'Pedro La Cipolla', true);

    $bone = new Toy ('Osso biricchino', '25€', true, 'FNJEDF32', true, 'Toy');

    $userBanana33 = new Customer ('Checco Zalone', '27', 'banana33@gmail.com', 'BANANA33', false, null, 'Banana33', true, null);

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

        echo $userBanana33->getName()    
    ?>

    <br>

    <?php 
    echo $userBanana33->getDiscount();
    ?>
</body>
</html>