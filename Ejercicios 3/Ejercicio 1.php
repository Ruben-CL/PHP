<?php

function Tabla($tamaño){
$tabla=[];
for ($i=0; $i<$tamaño; $i++){
    $tabla[$i]= random_int(1,10);
}
return $tabla;

}

function Tmax($tabla){
    $max=$tabla[0];

    for ($j=0; $j<count($tabla); $j++){
        if ($tabla[$j]>$max){
            $max=$tabla[$j];
        }
    }
    return $max;
}
function Tmin($tabla){
    $min=$tabla[0];
    for ($h=0; $h<count($tabla); $h++){
        if ($tabla[$h]<$min){
            $min=$tabla[$h];
        }
    }
    return $min;
}
function numeroRepetido ($tabla) {
    $repe = 0;
    $valor =0;
    for ($i = 0; $i < count($tabla); $i++) {
        $veces = 0;
       
        for ($j = 0; $j < count($tabla); $j++) {
            if ($tabla[$i] == $tabla[$j]) {
                $veces++;
            }    
        }
        if ($veces > $repe) {
            $valor = $tabla[$i];
            $repe = $veces;
        }
    }
    return $valor;
} 
?>
<html>
<?php
    define ('TAMAÑO',20);

    $numeros = Tabla(TAMAÑO);
   
    echo "<table style='border: 1px solid black; border-collapse:collapse';><tr>";
    for ($i = 0; $i<count($numeros);$i++) {
        echo "<td style='border: 1px solid black; padding: 5px';>",$numeros[$i]."</td>";
    }
    echo "</tr></table>";
    $maximo = Tmax($numeros);
    $minimo = Tmin($numeros);
    $repetido = numeroRepetido($numeros);
    echo "<br> Máximo = $maximo <br> Mínimo = $minimo <br> Moda = $repetido "  
?>
</html>