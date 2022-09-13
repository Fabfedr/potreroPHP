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
        $n = 25;
        
        
        if ($n > 0) {
                echo "Es positivo";
        }

        echo "<br>";

        if ($n > 1 & $n < 10) {
                echo "El número está entre 1 y 10";
        }

        else {
                echo "El número no está entre 1 y 10";
        }
        

        echo "<br>";

        if ($n > 10) {
                echo "El número es mayor que 10";
        }

        elseif ($n < 2) {
                echo "El número es menor que dos";
        }


        echo "<br>";

        $numero1 = 9;
        $numero2 = 35;


        if ($numero1 > $numero2) {
                echo $numero1 + $numero2;
                echo "<br>";
                echo $numero1 - $numero2;
                echo "<br>";

        }

        elseif ($numero1 < $numero2) {
                echo $numero1 * $numero2;
                echo "<br>";
                echo $numero1 / $numero2;
                echo "<br>";
                echo $numero1 % $numero2;
                echo "<br>";
        }

        else {
                echo "Los números ingresados son iguales";
        }





        
        
        
        
        
        
        
        ?>


    
    
</body>
</html>