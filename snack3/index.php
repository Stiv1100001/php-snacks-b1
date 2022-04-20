<?php 

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$keys = array_keys($posts);
$values = array_values($posts);
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

    <?php for ($i = 0; $i < count($keys); $i++) {?>

        
        <div>
            <h1><?php echo $keys[$i] ?></h1>

             <?php for($j = 0; $j < count($values[$i]); $j++) {  ?>
                <p>
                    <?php echo $values[$i][$j]['title']. "<br>" ?>
                    <?php echo $values[$i][$j]['author']. "<br>" ?>
                    <?php echo $values[$i][$j]['text']. "<br>" ?>
                </p>
            <?php }?>
        </div>

    <?php }?>

    </main>
</body>
</html>
