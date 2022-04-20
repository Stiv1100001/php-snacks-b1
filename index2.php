<?php

$mail = $_GET['mail'];
$name = $_GET['name'];
$age = $_GET['age'];

if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
    $result =  "Accesso consensito";   
} else {
    $result =  "Accesso Negato";
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
        <?php echo $result ?>
    </p>
</body>
</html>
