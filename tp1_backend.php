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
        echo "Hola Mundo";
        ?>  
        <br>
        <?php
        $Saludo="Hola Mundo";
        echo $Saludo;  
        ?>
       <br>
    
       <?php
        $manzana= 9;
        $naranja=12;

        echo $manzana + $naranja;echo "<br>";
        echo $manzana - $naranja;echo "<br>";
        echo $manzana * $naranja;echo "<br>";
        echo $manzana / $naranja;echo "<br>";
        echo $manzana % $naranja;echo "<br>";
        ?>
<br>

        <?php
        $celsius= 20;
        $farenheit= ($celsius*1.8) + 32;

        echo $farenheit;
        ?>

        <br>
        <br>
        <?php
        $baseCuadrado = 18;
        $alturaCuadrado= 12;

        $perimetro= 2 * ($baseCuadrado + $alturaCuadrado);
        $area = $baseCuadrado * $alturaCuadrado;

        echo $perimetro; echo "<br>";
        echo $area;      echo "<br>";
        ?>






    
    
</body>
</html>