<!-- 
-Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
-Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
-Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 -->

<!-- 11:56 -->

<?php
$match = [
    [
        "homeTeam" => "lakers",
        "awayTeam" => "dallas",
        "homePoints" => "25",
        "awayPoints" => "30"
    ],
    [
        "homeTeam" => " chicago bulls",
        "awayTeam" => "detroit pistons",
        "homePoints" => "32",
        "awayPoints" => "29"
    ],
];
?>

<ul>
    <?php
    for ($i = 0; $i < count($match); $i++) {
        $currentMatch = $match[$i];
    ?>
        <li>
            <?php
                echo $currentMatch["homeTeam"] . " - " . $currentMatch["awayTeam"] . " | " . $currentMatch["homePoints"] . " - " . $currentMatch["awayPoints"]
            ?>
        </li>
    <?php
    }
    ?>
</ul>