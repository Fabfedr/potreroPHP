<?php

echo "Ejercicio 1 <br>";

    $numerosPares = ["0", "2" , "4" , "6" , "8" , "10" , "12" , "14" , "16" , "18" ];


    foreach ($numerosPares as $valor) {
        print "<p>$valor</p>";
    }

echo "Ejercicio 2 <br>";


    $arrayUno = ["Pedro", "Ana", 34, 1];

    print_r ($arrayUno);

echo "Ejercicio 3 <br>";

    $arrayDos = ['Nombre' => "Pedro", 'Apellido' => "Torres", 'Direccion' => "Av. Mayor 3703", 'Telefono' => "1122334455"];
    print_r ($arrayDos);

echo "Ejercicio 4 <br>";

    $arrayTres = ["Madrid", "Barcelona","Londres", "New York", "Los Angeles", "Chicago"];

    print "La ciudad con el indice 0 tiene el nombre de $arrayTres[0]<br>";
    print "La ciudad con el indice 1 tiene el nombre de $arrayTres[1]<br>";
    print "La ciudad con el indice 2 tiene el nombre de $arrayTres[2]<br>";
    print "La ciudad con el indice 3 tiene el nombre de $arrayTres[3]<br>";
    print "La ciudad con el indice 4 tiene el nombre de $arrayTres[4]<br>";

echo "Ejercicio 4 <br>";

    $arrayCuatro = ['MD'=>"Madrid",'BCL'=> "Barcelona",'LD'=>"Londres",'NY'=> "New York",'LA'=> "Los Angeles",'CCG'=> "Chicago"];

    foreach ($arrayCuatro as $indice => $valor) {
        print "El indice de $valor es $indice <br>";
    }


?>