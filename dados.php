<?php
define ('1', "&#9856");
define ('2', "&#9857");
define ('3', "&#9858");
define ('4', "&#9859");
define ('5', "&#9860");
define ('6', "&#9861");
$suma=0;

function dado(){
for ($i=0;$i<5;$i++){
    $valores[]= random_int(1, 6);
}
return $valores;
}
function calcular($dados){
    foreach ($dados as $valor ){
        $suma += $valor;
    }
    $suma = $suma - max($dados)- min($dados);
    return $suma;
}
$mensaje=['Empate','gana jugador 1','gana jugador 2'];
function calcularGanador ($valor1, $valor2){
    
    $ganador =0;
    
    if ( $valor1 == $valor2 ) return $ganador;
    if($valor1 > $valor2){
        $ganador=1;
    } 
    return $ganador;
    if($valor1 < $valor2){
        $ganador=2;
    } 
    return $ganador;
}

$jugador1 = dado();
$jugador2 = dado();
?>
<html>
<style>
    .jugador1, h1, .jugador2 {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
    p {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

    <body>
  <h1>Cinco Dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>
  <p class="jugador1">Jugador 1</p>
    <p><?php echo $jugador1 ?></p>
    <p><?php echo $jugador2 ?></p>
    <p class="jugador2">Jugador 2</p>
    <p><?php echo $mensaje[calcularGanador($jugador1,$jugador2)];?></p>

    </body>
</html>