<!-- 
-Creare un array di array.
-Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore -un array di post associati a quella data. 
-Stampare ogni data con i relativi post. -->

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
            'author' => 'Mario Rossi',
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
            'author' => 'Giuseppe Verdi',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>

<body>

    <ul>
        <?php
        $keysMap = array_keys($posts);
        for ($i = 0; $i < count($posts); $i++) {
            $key = $keysMap[$i];
            $value = $posts[$key];
            echo "<li>" . $key . "\n";
            echo "<ul>\n";
            for ($y = 0; $y < count($value); $y++) {
                $singlePost = $value[$y];
                echo "<li>\n";
                echo "<strong>" . $singlePost["title"] . "</strong><br>\n";
                echo "<em>" . $singlePost["author"] . "</em><br>\n";
                echo "<p>" . $singlePost["text"] . "</p>\n";
                echo "</li>\n";
            }
            echo "</ul>\n";
            echo "</li>";
        }
        ?>
    </ul> -->


    <ul>

        <?php
        $keysMap = array_keys($posts);

        for ($i = 0; $i < count($posts); $i++) {
            $key = $keysMap[$i];
            $value = $posts[$key];
        ?>

            <li>
                <?php echo $key ?>

                <ul>

                    <?php
                    for ($y = 0; $y < count($value); $y++) {
                        $singlePost = $value[$y];
                    ?>
                        <li>
                            <strong><?php echo $singlePost["title"] ?></strong><br>
                            <em><?php echo $singlePost["author"] ?></em>
                            <p><?php echo $singlePost["text"] ?></p>
                        </li>
                    <?php
                    } #Fine secondo ciclo for
                    ?>

                </ul>

            </li>

        <?php
        } #Fine primo ciclo for
        ?>
    </ul>



</body>

</html>