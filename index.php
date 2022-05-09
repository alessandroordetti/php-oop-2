
<?php 

    include_once __DIR__ . "/classes/AnimalShop.php";

    $caniniGattiniShop = new AnimalShop ("Canini e Gattini carini", "www.caniniegattini.com", 'caniegatti@gmail.com', 'IT000E444W', 'Roma', 'Pedro La Cipolla', true)

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
    
    ?>
</body>
</html>