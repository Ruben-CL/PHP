<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
</head>
<body>
<?php

$codigosErrorSubida= [
    0 => 'Subida correcta',
    1 => 'El tamaño del archivo excede el admitido por el servidor',  
    2 => 'El tamaño del archivo excede el admitido por el cliente',  
    3 => 'El archivo no se pudo subir completamente',    
    4 => 'No se seleccionó ningún archivo para ser subido',    
    6 => 'No existe un directorio temporal donde subir el archivo',    
    7 => 'No se pudo guardar el archivo en disco',  
    8 => 'Una extensión PHP evito la subida del archivo'  
];

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    include_once "ficheros.html";
}else {
if (count($_POST)==0){
    $msg= "  Error: se supera el tamaño máximo de un petición POST ";   
}
}
if (isset($_FILES["archivos"])){
var_dump($_FILES["archivos"]);
}
function tamañofichero(){
    $_FILES["archivos"];
}

?>
</body>
</html>