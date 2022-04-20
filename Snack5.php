<?php
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat leo ac tellus maximus dictum. Fusce libero dui, convallis id lectus vitae, tincidunt euismod turpis. Morbi convallis odio volutpat, pellentesque enim vel, convallis tellus. Nunc elementum odio non orci condimentum porttitor. Vivamus semper lectus ut laoreet porta. Nullam ipsum dolor, bibendum at erat et, maximus laoreet metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque congue cursus tortor a consectetur. Sed mollis in nisi sit amet rhoncus. Sed semper risus ac tristique sodales. Praesent metus orci, semper et cursus ut, pharetra eget urna. Vestibulum at malesuada justo.";


    $textArray = explode('.', $text);

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
    <main>
        <?php for ($i = 0; $i < count($textArray); $i++) {?>

            <p>
                <?php echo $textArray[$i]; ?>
            </p>

        <?php } ?>
    </main>
</body>
</html>
