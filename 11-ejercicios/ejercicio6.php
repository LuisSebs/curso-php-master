<?php
    /**
     * Ejercicio 6. Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10
     */
    echo "<h1>Tablas de multiplicar del 1 al 10</h1>";
    for($i=1;$i<=10;$i++){
        echo "<h3>Tabla de multiplicar de $i</h3>";
        echo "<table border='1'>";
        for($j=1; $j<=10; $j++){
            $resultado = $i*$j;
            echo "<tr>"; 
                echo "<td>";
                    echo "$i x $j = ";
                echo "</td>";
                echo "<td>";
                    echo $resultado;
                echo "</td>";
            echo "</tr>";
        }        
        echo "</table>";
    } 

    echo "<h1>Tablota</h1>";
    echo "<table border='1'>";
    $fila = '';
    // Encabezados
    $encabezados = '';
    for ($i=1; $i<=10; $i++){
        $encabezados = $encabezados."<td>Tabla del $i</td>";
    }
    // Tablas de multiplicar
    for($i=1; $i<=10; $i++){
        $tabla = '';
        for($j=1; $j<=10; $j++){
            $resultado = $i*$j;
            $tabla = $tabla."$i x $j = $resultado <br/>";
        }
        $fila = $fila."<td>$tabla</td>";
    }
    echo "<tr>$encabezados</tr>";
    echo "<tr>$fila</tr>";
    echo "</table>";
?>
