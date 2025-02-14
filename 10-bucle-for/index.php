<?php
// FOR
/*
for (variable contador, condicion, actualizacion){
    // BLOQUE DE INSTRUCCIONES}
}
*/

// Suma de los n numeros
$n = (isset($_GET['n'])) ? $_GET['n'] : 10;
echo "Suma de los primeros $n numeros";
$resultado = 0;
for ($i = 0; $i<=$n; $i++){
    $resultado+=$i;
    if ($resultado == 45){
        echo "<strong>Esta operacion no se puede mostrar</strong><br/>";
    }else{
        echo "$resultado<br/>";
    }

}
echo "<br/>";
echo "Resultado: $resultado";
?>