<?php
function usuarioOK($usuario, $contraseña): bool
{

    return (strlen($usuario) >= 8  && $usuario == strrev($contraseña));
}

function contPalabras($cadena)
{
    return str_word_count($cadena, 0);
}

function letraMasRepetida($cadena)
{
    $maxVeces = 0;
    $maxLetra = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
        $veces = 1;
        $letrai = $cadena[$i];
        for ($j = $i + 1; $j < strlen($cadena); $j++) {
            if ($letrai == $cadena[$j]) {
                $veces++;
            }
        }
        if ($veces > $maxVeces) {
            $maxLetra = $letrai;
            $maxVeces = $veces;
        }
    }
    return $maxLetra;
}

function palabraMasRepetida($cadena)
{
    $palabras = str_word_count($cadena, 1);
    $pVeces = array_count_values($palabras);
    asort($pVeces);
    return array_key_last($pVeces);
}
