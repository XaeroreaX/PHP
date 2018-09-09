<?php

$arrayAnimales = array("Perro", "Gato", "Ratón", "Araña", "Mosca");

$arrayAnios = array("1986", "1996", "2015", "78", "86");

$arrayLenguajes = array("“php", "mysql", "html5", "typescript", "ajax");

//$array = array(["Animales"] => $arrayAnimles, ["Anios"] => $arrayAnios, ["Lenguajes"] => $arrayLenguaje);

echo "Animales/Años/Lenguajes<br>";

$i = 0;

for($i = 0; $i < 5; $i++)
{

    echo $arrayAnimales[$i] . " - ". $arrayAnios[$i]." - ".$arrayLenguajes[$i] . "<br>";


}




?>