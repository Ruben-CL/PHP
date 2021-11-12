<h1> Ejercicio 6 </h1>
<?php

    $num1=random_int(1,10);
    echo "<table border='1px'>";
    echo "<tr> <th> tabla del $num1 </th> <th> </th> </tr>
    <tr> 
    ";
    for ($i=1; $i<=10; $i++){
        echo "<td>$num1 * $i </td>", "<td>",$num1 * $i."</td></tr>";}
    echo "</table>";
    ?>