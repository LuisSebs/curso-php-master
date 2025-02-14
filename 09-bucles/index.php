<?php
// BUCLE WHILE
/*
    Estructura de control que itera o repite la ejecucion de una serie de instrucciones
    tantas veces como sea necesario, en base a una condicion.

    while(condicion){
        bloque de instrucciones
        otra instruccion
    }
 */

$numero = 0;
while($numero <= 100){
    if ($numero == 100){
        echo "<h1>$numero</h1>";
    }else{
        echo "$numero,";
    }
    $numero++;
}

// Ejemplo:
// comprobar si existe una variable
if(isset($_GET['numero'])){
    // Casteo
    $numero = (int) $_GET['numero'];
}else{
    $numero = 1;
}

var_dump($numero);

// TABLA DE MULTIPLICAR (ciclo while)
$numero = $_GET['numero'];
echo "<h1> Tabla de multiplicar del numero $numero";
$i = 1;
while($i<=10){
    echo "<p>$numero x $i = ".($numero*$i)."</p>";
    $i++;
};
// DO WHILE
/*
do {
    // BLOQUE DE INSTRUCCIONES
} while(condicion);
 */
$edad = 18;
$contador = 1;
do {
    echo "Tienes acceso al local privado $contador <br/>";
    $contador++;
} while($edad >= 18 && $contador <= 10);
?>