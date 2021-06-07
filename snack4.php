<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->




<?php
$maxNumbers = 15;
$numbersList = [];

for ($i = 1; $i <= 15; $i++) {
    $randomNumber = rand(1, 15);

    // se il numero non è presente nell'array allora pushalo al suo interno altrimenti torna all'iterazione precedente
    if (!in_array($randomNumber, $numbersList)) {
        $numbersList[] = $randomNumber;
    } else {
        $i--;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

<body>



    <?php
    for ($i = 0; $i < count($numbersList); $i++) {
        echo "Numero casuale: " . $numbersList[$i] . "<br>\n";
    }
    ?>



</body>

</html>