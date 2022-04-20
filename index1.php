<?php

    $partita = [
        "casa" => "Roma",
        "ospite" => "Olimpia",
        "p_casa" => 10,
        "p_ospite" => 10,
    ];

    $partite = [];

    for ($i = 0; $i < 10; $i++) {
        $partite[] = $partita;
    }
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
    <p>
        <?php 
        

         for ($i = 0; $i < 10; $i++) {
            echo $partite[$i]['casa']. " - " . $partite[$i]["ospite"] . " | ". $partite[$i]["p_casa"] . " - " . $partite[$i]["p_ospite"] . " <br>";
         }
        ?>
        
        
    </p>
</body>
</html>
