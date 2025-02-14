<?php
/*
TIPOS DE DATOS:
Entero (int / integer) = 99
Coma flotante / decimales (float / double) = 3.45
Cadenas (string) = "Hola yo soy un string"
Boleano (bool) = 1 0 true false
null
Array (Coleccion de datos)
Objetos
*/

$numero = 100; // Numero
$decimal = 27.9; // Decimal
$texto = "Soy un texto"; // String
$verdadero = true; // Verdadero
$null = null; // Variable con un null
$declarada; // Variable declarada pero no inicializada

echo $verdadero;
echo "<br>";

// Obtener el tipo de dato
echo gettype($numero).'<br>';
echo gettype($decimal).'<br>';
echo gettype($texto).'<br>';
echo gettype($verdadero).'<br>';
echo gettype($null).'<br>';
echo gettype($declarada).'<br>'; // Esto arroja un error, ya que la variable no esta inicializada

// Curiosidades de las variables
// + No pueden empezar por numeros o simbolos raros

// Debugear
$mi_nombre = "Luis Sebastian";
var_dump($mi_nombre); // Arroja informacion detallada de la variable

// Incrustar variables
$incrustado = "Hola $mi_nombre <br>"; // Solo se puede con comillas dobles, ademas es mas lento
echo $incrustado;
// Scape de comillas dobles
$scape = "Una vez alguien me dijo \"Recuerda que vas a morir, asi que acuerdate de vivir\"";
echo $scape;
?>

