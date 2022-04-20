<?php 

    $numbers = [];

    while(count($numbers) < 15) {
        $newNumber = rand(1, 100);

        if (!in_array($newNumber, $numbers)) {
            $numbers[] = $newNumber;
        }
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
    <?php
        var_dump($numbers);
    ?>
</body>
</html>
