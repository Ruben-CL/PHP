<h1> Ejercicio 5 </h1>
<?php
    $num1=random_int(1,10);
    $num2=random_int(1,10);

    echo "<table border='1px'>";
    echo "<tr> <th> Operación </th> <th> Resultado </th> </tr>
    <tr> 
    ";

    echo "<td>$num1 + $num2 </td>", "<td>",$num1 + $num2."</td></tr>";
    echo "<td>$num1 - $num2 </td>", "<td>",$num1 - $num2."</td></tr>";
    echo "<td>$num1 * $num2 </td>", "<td>",$num1 * $num2."</td></tr>";
    echo "<td>$num1 / $num2 </td>", "<td>",$num1 / $num2."</td></tr>";
    echo "<td>$num1 % $num2 </td>", "<td>",$num1 % $num2."</td></tr>";
    echo "<td>$num1 ** $num2 </td>", "<td>",$num1 ** $num2."</td></tr>";
?>

<style>
    table{ border-collapse:collapse;}
</style>