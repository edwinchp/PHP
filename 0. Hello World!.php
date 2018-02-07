<title>Hello World!</title>
<?php

echo "¡Hola Mundo!";
echo "<br/>";
echo "<hr>";

//Algunas de las funciones para hacer con un string
$myName = "Edwin Chi Pineiro";
echo str_replace("Edwin", "Edd", $myName); //Outputs Edd Chi Pineiro
echo "<br/>";
echo str_pad($myName,20,"."); //Llena hasta N caracteres con "."
echo "<br/>";
echo str_repeat($myName . " / ",5); //Repite la variable N veces.
echo "<br/>";
echo str_shuffle($myName); //Revuelve los caracteres de la variable
echo "<br/>";
print_r(str_split($myName)); //Muestra en un array cada uno de las letras y su posición
echo "</br>";
echo str_word_count($myName); //Outputs 3
echo "</br>";
echo strtoupper($myName); //MAYÚSCULAS
echo "</br>";
echo strtolower($myName); //minúsculas
?>
