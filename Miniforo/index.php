<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="web/css.scss" rel="stylesheet" type="text/css">

    <title>MiniForo</title>
</head>
<body>
<div id="container" style="width: 450px;">
<div id="header">
<img src="web/logo.png" alt="logo"width="100px" height="100px">
<h1>Mini Foro</h1>
</div>

<div id="content">


<?php
// PRIMERA APROXIMACIÓN AL MODELO VISTA CONTROLADOR.
// Funciones auxiliars Ej- usuarioOK
include_once 'app/funciones.php';

if (!isset($_REQUEST['orden'])) {
    include_once 'app/entrada.php';
} else {
    switch ($_REQUEST['orden']) {

        case "Entrar":
            // Chequear usuario
            if (
                isset($_REQUEST['nombre']) && isset($_REQUEST['contraseña']) &&
                usuarioOK($_REQUEST['nombre'], $_REQUEST['contraseña'])
            ) {
                echo " Bienvenido <b>" . $_REQUEST['nombre'] . "</b><br>";
                include_once  'app/comentario.html';
            } else {
                include_once 'app/entrada.php';
                echo " <br> Usuario no válido </br>";
            }
            break;

        case "Nueva opinión":
            echo " Nueva opinión <br>";
            include_once  'app/comentario.html';
            break;
        case "Detalles": // Mensaje y detalles
            echo "Detalles de su opinión";
            include_once 'app/comentarioRelleno.php';
            include_once 'app/detalles.php';
            break;
        case "Terminar": // Formulario inicial
            include_once 'app/entrada.php';
    }
}
?>
</div>
</div>
</body>
</html>