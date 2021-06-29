

<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
Buon pranzo e buon lavoro, a domani! -->

<?php 
    $buffer = [];

    while (count($buffer) <14){

        $numero = rand(1,100);
        
        if($numero != $buffer[i]){
            echo($numero . "<br>");
        }

        //$buffer = $numero;
        array_push($buffer, $numero);
    }


?>


