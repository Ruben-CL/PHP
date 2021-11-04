<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino</title>
</head>
<body>
<?php

    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(empty($_SESSION['dinero'])){
            if(empty($_GET['dinero'])){
                if(isset($_COOKIE['visitas'])){
                    $numvisitas=$_COOKIE['visitas'];
                }
                $numvisitas++;
                setcookie("visitas", $numvisitas,time()+ 30*24*3600);
                include_once "entrada.php";
            }else{
                
                    $_SESSION['dinero']=$_GET['dinero'];
                    include_once "apuesta.php";
        }
    }
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_SESSION['dinero'])){
        include_once 'entrada.php';
    }else{
        if($_SESSION['dinero']>= $_POST['dineroApostado']){
            if($_POST['ejecutar']=="apostar"){
                $resultado = (random_int(1, 100) % 2 == 0) ? "par" : "impar";
                if($_POST['parimpar']==$resultado){
                    $_SESSION['dinero']+= $_POST['dineroApostado'];
                    include_once "ganaste.php";
                    include_once "apuesta.php";
                }else{
                    $_SESSION['dinero']-= $_POST['dineroApostado'];
                    if($_SESSION['dinero']==0){
                        include_once "cero.php";
                    }else{
                    include_once "perdiste.php";
                    include_once "apuesta.php";
                    }

                }
                      
            }else{
                session_destroy();
                include_once "terminar.php";
            }
        }else{
            include_once "error.php";
        }
        }
        
    
}
?>
</body>
</html>