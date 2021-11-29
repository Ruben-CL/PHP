<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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
echo "<table border=1>";
echo "<tr><th>Nombre-Tipo</th><th>Tamaño</th></tr>";
// Mostramos cada entrada del directorio
$entrada = readdir($dir_cursor); // lee primera entrada
while ($entrada !== false) // mientras haya datos
{
    
    if (is_file($directorio . "/" .$entrada)) {

        $tipo= mime_content_type($directorio . "/" . $entrada);
       // echo "<tr><td> $entrada</td><td> : $tipo </td>";
        $tamaño = filesize($directorio . "/" . $entrada);
        //echo "<td> : $tamaño </td></tr>";
        $clave= $entrada . " " . $tipo;
        $archivos[$clave]=$tamaño;

    } 
        
    $entrada = readdir($dir_cursor); // lee siguiente entrada
}
asort($archivos);
foreach ($archivos as $clave => $tamaño) {
    echo "<tr><td> $clave </td>";
    echo "<td> : $tamaño </td></tr>";
}
echo "</table>";
closedir($dir_cursor); // cerramos el directorio
    }
    ?>