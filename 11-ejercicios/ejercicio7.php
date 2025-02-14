<?php
/**
 * Ejercicio 7. Hacer un programa que muestre todos los numeros IMPARES entre dos numeros 
 * que nos lleguen por la URL($_GET)
 */
if(isset($_GET['numero1']) && isset($_GET['numero2'])){    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];        
    if($numero1>$numero2){
        $temp = $numero1;
        $numero1 = $numero2;
        $numero2 = $temp;
    }
    echo "<h1>Numeros impares del $numero1 al $numero2</h1>";
    for($i=$numero1+1; $i<$numero2; $i++){
        if($i%2!=0){
            echo "$i<br/>";
        }
    }
}else{
    echo "Pasa por la URL dos numeros con el siguiente formato: <br/>";
    echo "?numero1=X&numero2=Y";
}
?>