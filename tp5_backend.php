<?php

$numero = 0;
while ($numero < 100) {
    print $numero;
    $numero++;
}

echo "<br>";
echo "<br>";

$numero = 100;
while ($numero > 0) {
    print $numero;
    $numero--;
}

echo "<br>";
echo "<br>";

for($n=0; $n<=100; $n= $n+2){
 
    echo $n;
}

echo "<br>";
echo "<br>";

for($n=0; $n<=100; $n= $n+2){
 
    echo $n+1;
}

echo "<br>";
echo "<br>";

$resultado = 1;

for($i = 1; $i <= 20; $i++){
  $resultado = $resultado + $i;
  echo $resultado;
}

echo "<br>";
echo "<br>";

for($n=0; $n<=20; $n= $n+2){
 
    echo $n+$n;
}

?>