<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    session_start();
    $_SESSION["letrasJugadas"]="";
    $_SESSION["count"] = 0;
    $palabraBuscar =["madrid","sevilla"];
    $test  = $palabraBuscar[random_int(0,1)];
    $_SESSION["palabra"]= $test;
    $guiones=array();
    foreach(str_split($test) as $valor){
     array_push($guiones, "_");
    
    }

    $_SESSION["palabraGuiones"]=$guiones;
    include "juego.php";

    ?>

</body>
</html>