<h1> Ejercicio 2 </h1>
<?php
    $num1=random_int(1,9);
    for ($i=1; $i<=$num1; $i++){
        for ($j=1; $j<=$i; $j++){
           if ($i%2==0){
            echo '<font color="red">',$i ,'</font>';
           }else{
            echo '<font color="blue">',$i ,'</font>';
           }
            
        }
       echo "<br>";
    }
?>