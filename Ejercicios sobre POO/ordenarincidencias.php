<?php
function ordenarprioridad( $a,  $b){
    return $a[3] - $b[3];
}
define('FILEUSER','incidencias.txt');
$tablaIndencias=[];

// Fichero a tabla
$fich = @fopen(FILEUSER, 'r') or die("ERROR al abrir fichero"); 
while ($partes = fgetcsv($fich)) {
    // Metemos los campos en un array
    $campos = [ $partes[0],$partes[1],$partes[2],$partes[3],$partes[4]];
    $tablaIndencias[]= $campos;
}
fclose($fich);
var_dump($tablaIndencias);

usort($tablaIndencias,'ordenarprioridad');

$fich = fopen(FILEUSER,'w');

// Tabla a fichero
foreach ($tablaIndencias as $campos) {
    fputcsv($fich, $campos);
}

fclose($fich);
