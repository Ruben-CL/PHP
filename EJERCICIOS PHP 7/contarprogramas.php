<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<form method="POST">
        <p> ¿Qué directorio quieres abrir?</p><input type="text" name="directorio">
        <input type="submit" value="enviar" name="enviar">
    </form>
   
</body>
</html>
<?php
$archivos=array();
    if(isset($_POST['directorio'])){
        $directorio=$_POST['directorio'];
        if (! is_dir($directorio)) {// Comprueba que realmente existe el directorio
            die("No existe el directorio " . $directorio);
        }
    // Abrimos el directorio
$dir_cursor = @opendir($directorio) or die("Error al abrir el directorio");
// Mostramos cada entrada del directorio
$entrada = readdir($dir_cursor); // lee primera entrada
$contador=0;
while ($entrada !== false) // mientras haya datos
{
    
    if (is_file($directorio . "/" .$entrada)) {

        $tipo= mime_content_type($directorio . "/" . $entrada);
        if($tipo=="text/x-php"){
            $datos=file($directorio."/".$entrada);
            echo "Archivo: $entrada tiene " . count($datos) . " líneas. <br>";
            $contador+= count($datos);
            
        }
       
    } 
        
    $entrada = readdir($dir_cursor); // lee siguiente entrada
}
echo "contador total: $contador";
closedir($dir_cursor); // cerramos el directorio
    }
    
    ?>