<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
</head>

<body>
    <?php

    $codigosErrorSubida = [
        0 => 'Subida correcta',
        1 => 'El tamaño del archivo excede el admitido por el servidor',
        2 => 'El tamaño del archivo excede el admitido por el cliente',
        3 => 'El archivo no se pudo subir completamente',
        4 => 'No se seleccionó ningún archivo para ser subido',
        6 => 'No existe un directorio temporal donde subir el archivo',
        7 => 'No se pudo guardar el archivo en disco',
        8 => 'Una extensión PHP evito la subida del archivo'
    ];

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        include_once "ficheros.html";
    } else {
        if (count($_POST) == 0) {
            $msg = " Error: se supera el tamaño máximo de un petición POST";
        }
    }
    if (isset($_FILES["archivos"])) {
        var_dump($_FILES["archivos"]);
    }
    function tamañofichero($miArray)
    {
        $suma = 0;
        for ($i = 0; $i < count($miArray['archivos']['size']); $i++) {
            $suma += $miArray['archivos']['size'][$i];
        }
        if ($suma > 300000) {
            return false;
        }
        return true;
    }
    function tipoimagen($tipo)
    {
        if ($tipo == "image/jpeg" || $tipo == "image/png") {
            return true;
        }
        return false;
    }
    function envio($miArray)
    {
        if ($miArray['archivos']['size'][0] != 0) {
            return true;
        }
        return false;
    }
    function fichero($nombreFichero)
    {
        $ruta = "/home/ruben/Ficheros/" . $nombreFichero;
        if (file_exists($ruta)) {
            return true;
        }
        return false;
    }
    function tamañoTodosArchivos($miArray, $errores)
    {
        $error = "";
        $añadir = (tamañofichero($miArray)) ? "" : "se supera el límite de tamaño permitido <br>";
        $error = $error . $añadir;
        $añadir = "";
        if (envio($miArray)) {
            for ($i = 0; $i < count($miArray['archivos']['name']); $i++) {
                $añadir = (tipoimagen($miArray['archivos']['type'][$i])) ? "" : "El archivo " . $miArray['archivos']['name'][$i] . " no es una imagen <br>";
                $error = $error . $añadir;
                $añadir = "";
                $añadir = (fichero($miArray['archivos']['name'][$i])) ? "El archivo " . $miArray['archivos']['name'][$i] . " el fichero ya existe <br>" : "";
                $error = $error . $añadir;
                $añadir = "";
                $añadir = ($miArray['archivos']['error'][$i] > 0) ? $errores[$miArray['archivos']['error'][$i]] . "<br>" : "";
                $error = $error . $añadir;
                $añadir = "";
            }
        } else {
            $error = "No se ha enviado ningún archivo";
        }
        return $error;
    }
    function guardar($miArray, $archivo)
    {
        $msg = "";
        if (tipoimagen($miArray['archivos']['type'][$archivo]) == true && fichero($miArray['archivos']['name'][$archivo]) == false && tamañofichero($miArray)) {
            $msg = "El archivo " . $miArray['archivos']['name'][$archivo] . " se ha subido <br>";
        }
        return $msg;
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        print(tamañoTodosArchivos($_FILES, $codigosErrorSubida));
        for ($i = 0; $i < count($_FILES['archivos']['name']); $i++) {
            print(guardar($_FILES, $i));
        }
    }

    ?>
</body>

</html>
