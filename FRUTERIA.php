<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería</title>
</head>
<body>
    <h1>LA FRUTERÍA DEL SIGLO XXI</h1>
    <?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(empty($_SESSION['nombre'])){
            if(empty($_GET['nombre'])){
                include_once "archivo1.php";
            }else{
                
                    $_SESSION['nombre']=$_GET['nombre'];
                    include_once "archivo2.php";
        }
        }else{
            if(count($_SESSION['frutas']) != 0){
                include_once 'archivo3.php';
            }
            include_once 'archivo2.php';
        }
    }
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(empty($_SESSION['nombre'])){
            include_once 'archivo1.php';
        }else{
            if($_POST['ejecutar']=="añadir"){
                if(empty($_SESSION['frutas'][$_POST['frutas']])){
                    $_SESSION['frutas'][$_POST['frutas']]=$_POST['cantidad'];
                    include_once "archivo3.php";
                    include_once "archivo2.php";
                }else{
                    $_SESSION['frutas'][$_POST['frutas']]+=$_POST['cantidad'];
                    include_once "archivo3.php";
                    include_once "archivo2.php";
                }
            }else{
                session_destroy();
                include_once "archivo3.php";
                include_once "archivo4.php";
            }
        }
        
    }
    ?>
</body>
</html>