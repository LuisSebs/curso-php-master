<?php
/**
 * Ejercicio3. Escribir un programa que imprima por pantalla los cuadrados
 * (un numero multiplicado por si mismo) de los 40 primeros numeros naturales
 * Hint: Utilizar bucle while.
 */
$i=0;
while($i<=40){
    $cuadrado = pow($i,2);
    echo "El cuadrado de $i es: $cuadrado <br/>";
    $i++;
}
?>