
<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $partite =[
        [
            "Casa" => "Chicago Bulls",
            "Ospite" => "Lakers",
            "puntiCasa" => 65,
            "puntiOspite" => 2,
        ],
        [
            "Casa" => "Nets",
            "Ospite" => "Miami Heats",
            "puntiCasa" => 87,
            "puntiOspite" => 43,
        ]
        ];
    foreach ($partite as $key => $value) {
        echo "<p>" . $value["Casa"] . " " . $value["Ospite"] . " | " . $value["puntiCasa"] . "-" . $value["puntiOspite"] . "</p>";
    }
?>