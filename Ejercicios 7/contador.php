<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
<?php
        if(isset($_COOKIE['entradas'])){
                    $numentradas=$_COOKIE['entradas'];
                }
                $numentradas++;
                setcookie("entradas", $numentradas,time()+ 3*30*24*3600);

            $contador= @file_get_contents("accesos.txt");
            settype($contador,"integer");
            $contador++;
            file_put_contents("accesos.txt",$contador);
            echo "has entrado " .$contador. " veces en la página <br>";
            echo "has entrado $numentradas veces en el navegador";


?>
</body>
</html>