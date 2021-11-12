<?php
define ('PIEDRA1',  "&#x1F91C;");
define ('PIEDRA2',  "&#x1F91B;");
define ('TIJERAS',  "&#x1F596;");
define ('PAPEL',    "&#x1F91A;");

$mensaje=['Empate','gana jugador 1','gana jugador 2'];
function calcularGanador ($valor1, $valor2){
    
    $ganador =0;
    
    if ( $valor1 == $valor2 ) return $ganador;
    
    switch ($valor1){
        case PIEDRA1: $ganador = ( $valor2 == TIJERAS)?1:2; break;
        case PAPEL:   $ganador = ( $valor2 == PIEDRA1)?1:2; break;
        case TIJERAS: $ganador = ( $valor2 == PAPEL)?1:2; break;
    }
    return $ganador;
}
$valores = [PIEDRA1,PAPEL,TIJERAS];
$jugador1 = $valores[rand(0,2)];
$jugador2 = $valores[rand(0,2)];

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
    <h1> PIEDRA,PAPEL,TIJERAS</h1>
    <p>Actualice la página para mostrar otra partida</p>
    <p class="jugador1">Jugador 1</p>
    <p><?php echo $jugador1 ?></p>
    <p><?php echo ($jugador2 == PIEDRA1)?PIEDRA2:$jugador2; ?></p>
    <p class="jugador1">Jugador 2</p>
    <p><?php echo $mensaje[calcularGanador($jugador1,$jugador2)];?></p>
</body>
</html>