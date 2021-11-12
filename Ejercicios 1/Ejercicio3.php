<h1> Ejercicio 3 </h1>
<?php
    $num1=random_int(1,9);
    for ($i=1; $i<=$num1; $i++){
        for ($j=1; $j<=$num1-$i; $j++){
            echo "&nbsp";
        }
        for ($h=1; $h<=($i*2)-1; $h++){
            echo "*";
        }
        echo "<br>";
     }
     
 ?>       