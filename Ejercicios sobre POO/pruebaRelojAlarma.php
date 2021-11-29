<?php

include_once 'RelojAlarma.php';

$r1 = new RelojAlarma(20,10,10);

echo " <br> Reloj nº 1 ". $r1->mostrar()."<br>";

$r1->fijarHoraAlarma(20,11);
$r1->activarAlarma(true);

for ($i=1; $i<= 60; $i++){
    $r1->tictac();
}
echo " <br> Reloj nº 1 ". $r1->mostrar();
?>