<h1> Ejercicio 4 </h1>
<?php
    $var=0;
    $cont=0;
    for ($i=0; $cont<3; $i++){
        $num1=random_int(1,10);
        if($num1==6){
            $cont++;
        }else{
            $cont=0;
        }
        $var=$i;
    }
    echo $var;
?>    