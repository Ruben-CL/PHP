<?php

$pepito=[];

for ($i=1; $i<50; $i++){
    $pepito[$i]=$i;
}

shuffle($pepito);

$salida = array_slice($pepito, 0, 6);
print_r($salida);
for ($i=0; $i<count($salida);$i++){
    if($i!=count($salida)-1){
        echo "$salida[$i]";
    }else{
        echo "complementario: $salida[$i]";
    }
}
?>