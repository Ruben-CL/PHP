<?php
$num1=random_int(1,100);
$max=0;
$min=100;
$suma=0;
    echo "<table border='1px'>";
    echo "<tr> <th> Generación de 50 valores aleatorios </th> <th> </th> </tr>
    <tr> 
    ";
    for ($i=1; $i<=50; $i++){
        $num1=random_int(1,100);
        if ($num1>$max){
            $max=$num1;
        }
        if ($num1<$min){
            $min=$num1;
        }
       $suma+=$num1;
        }
        echo "<td> Máximo </td>", "<td>",$max."</td></tr>";
        echo "<td>Mínimo </td>", "<td>",$min."</td></tr>";
        echo "<td> Media </td>", "<td>",($suma/50)."</td></tr>";
        
    echo "</table>";
?>