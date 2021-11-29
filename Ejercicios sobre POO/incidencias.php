<?php
$nombre=filtrarEntrada($_POST['nombre']);
$resumen=filtrarEntrada($_POST['resumen']);
$prioridad=filtrarEntrada($_POST['prioridad']);
$fecha = date("d:m:Y G:i");
$ip = $_SERVER['REMOTE_ADDR'];
$linea=$fecha.",". $nombre.",".$resumen." ,". $prioridad.",". $ip."\n";
  $fichero=@file_put_contents("incidencias.txt",$linea, FILE_APPEND);
  if($fichero===false){ 
    echo "Error no se ha podido anotar su incidencia.";
  }else {
      echo "muhas gracias ".$_POST['nombre']." su incidencia se ha tramitado correctamente";
  }
  
function filtrarEntrada($entrada):string{
    $salida = trim($entrada); // Elimina espacios antes y después de los datos
    $salida = stripslashes($salida); // Elimina backslashes \
    $salida = htmlspecialchars($salida); // Traduce caracteres especiales en entidades HTML
    return $salida;
}
$numincidencias=0;
if(isset($_COOKIE['incidencias'])){
    $numincidencias=$_COOKIE['incidencias'];
    if ($numincidencias>=3){
        echo "Superado el número máximo de incidencias.";
        echo "Espere 2 minutos para introducir otra o reinicie su navegador.";
        exit();
    }
}
$numincidencias++;
setcookie("incidencias", $numincidencias,time()+ 2*60);

