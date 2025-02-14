<?php
/**
 * Ejercicio 4. Recoger dos numeros por la url (Parametros GET) y hacer las
 * operaciones basicas de una calculadora (suma, resta, multiplicacion y division)
 * de esos dos numeros.
 */

 if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo '<h1>Operaciones basicas</h1>';
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Mulptiplicacion: $multiplicacion <br/>";
    echo "Division: $division <br/>";
 }else{
    echo "Pasa por la URL dos numeros con el siguiente formato: <br/>";
    echo "?numero1=X&numero2=Y";
 }
?>