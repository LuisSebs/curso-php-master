<?php
// CONDICIONALES
/**
 * CONDICIONAL IF
 * if(condicion){
 *   // instrucciones
 * } else {
 *   // otras instrucciones
 * }
 * 
 * OPERADORES DE COMPARACION
 * == igual
 * === identico
 * != diferente
 * <> diferente
 * !== no identico
 * < menor que
 * > mayor que
 * <= menor o igual que
 * >= mayor o igual que
 * 
 * // OPERADORES LOGICOS
 * && AND Y
 * || OR O
 * ! NOT NO
 * and, or
 */


// Ejemplo 1
$color = 'rojo';
if($color == 'rojo'){
    echo "EL COLOR ES ROJO";
}else{
    echo "EL COLOR NO ES ROJO";
}

echo "<hr/>";

// Ejemplo 2
$year = 2019;
if($year == 2019){
    echo "Estamos en 2019";
}else{
    echo "No estamos en el 2019";
}

echo "<hr/>";

// Ejemplo 3
$nombre = "David Extemadura";
$edad = 42;
$mayoria_edad = 18;
$ciudad = "Madrid";
$continente = "Europa";
if ($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente == "Europa"){
        echo "<h2>$nombre y es de $ciudad </h2>";
    }else{
        echo  "No es Europeo";
    }
} else {
    echo "<h1>$nombre No es mayor de edad</h1>";
}

echo "<hr/>";

// Ejemplo 4
$dia = 3;
if($dia == 1){
    echo "Es lunes";
}else if($dia == 2){
    echo "Es martes";
}else if($dia == 3){
    echo "Es miercoles";
}else if($dia == 4){
    echo "Es jueves";
}else if($dia == 5){
    echo "Es viernes ";
}else{
    echo "Es finde";
}

echo "<hr/>";

// SWITCH
switch ($dia){
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "ES FIN DE";
}

echo "<hr/>";

// Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "ESTA EN EDAD DE TRABAJAR";
}else{
    echo "NO PUEDE TRABAJAR";
}

// Ejemplo 6
echo '<hr>';
$pais = 'Mexico';
if($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia'){
    echo "En este pais se habla español";
}else{
    echo "no se habla español";
}


echo "<hr/>";

// goto
goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo "<h1>Me he saltado 4 echos</h1>";

?>