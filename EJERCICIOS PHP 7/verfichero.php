<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<body>
    <form method="POST">
        <p> ¿que fichero quieres abrir?</p><input type="text" name="fichero">
        <input type="submit" value="enviar" name="enviar">
    </form>
<?php
if(isset($_POST['fichero'])){
    $fichero=$_POST['fichero'];
    $archivo= file($fichero);
    $caracteres=0;
    $lineas=0;
    foreach ($archivo as $value) {
        $lineas++;
       print_r($value."<br>");
       $caracteres+=strlen($value);
    }
   echo "hay $lineas líneas <br>";
    echo "hay $caracteres caracteres";
}

?>
</body>
</html>