<?php
session_start();

if(empty($_SESSION['saldo'])){
    $_SESSION['saldo']=0;
}

$msg="";
switch($_POST["Orden"]){
    case "Ingreso":
        $msg= ingresar ($_POST['importe']);
        break;
    case "Reintegro":
        $msg= hacerReintegro ($_POST['importe']);
        break; 
    case "Ver saldo":
        $msg= consultarSaldo ();
        break;
    case "Terminar":
        $msg=terminar();  
}

header("Location: minibanco.php?msg=".urlencode($msg));

function ingresar($cantidad):string{
    $mensaje="";
    if(!is_numeric($cantidad) || $cantidad < 0){
        $mensaje="la cantidad es menor que 0 o no es un número";
    }else {
        $_SESSION['saldo']+=$cantidad;
        $mensaje="Operación realizada.";
    }
    return $mensaje;
   
}
function hacerReintegro ($cantidad):string{
    $mensaje="";
    if(!is_numeric($cantidad) || $cantidad < 0 ){
        $mensaje= "la cantidad es menor que 0 o no es un número.";
    }else {
        $_SESSION['saldo']-=$cantidad;
        $mensaje="Operación realizada.";
    }
    return $mensaje;
}
function consultarSaldo():string{
    return "el saldo de la cuenta es: ".$_SESSION['saldo'];
}
function terminar():string{
    session_destroy();
    return "muchas gracias";

}
