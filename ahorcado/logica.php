
<?php
session_start();

if (isset($_POST["letra"])) {
    $letra = $_POST["letra"];
    $minuscula = strtolower($letra);
    $palabraBuscada = $_SESSION["palabra"];
    $arr = str_split($palabraBuscada);

    if (strpos($_SESSION["letrasJugadas"], $minuscula) !== false) {
        print_r("la letra ya ha sido usada");
        include "juego.php";
    } else {
        $_SESSION["letrasJugadas"] .= $minuscula;

        // print_r($_SESSION["palabra"]);
        print_r(strpos($palabraBuscada, $minuscula));
        if (strpos($palabraBuscada, $minuscula) !== false) {
            for ($i = 0; $i < strlen($palabraBuscada); $i++) {
                if ($minuscula == $arr[$i]) {
                    $_SESSION["palabraGuiones"][$i] = $minuscula;
                }
            }
            $resu = implode($_SESSION["palabraGuiones"]);
            if ($resu == $palabraBuscada) {
                include_once "ganar.php";
            } else {

                include "juego.php";
            }
        } else {
            $_SESSION["count"]++;
            if ($_SESSION["count"] == 4) {
                include_once "perder.php";
            } else {
                include "juego.php";
            }
        }
    }
} elseif ($_GET["reiniciar"]) {
    session_destroy();
    include "indexprueba.php";
    //print_r("adios");

}


?>