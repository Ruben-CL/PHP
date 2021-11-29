<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="container" style="width: 600px;">
		<div id="header">
			<h1>Procesando formulario</h1>
		</div>

		<div id="content">
		<?php 
        $nombre="";
        $clave="";
        $semaforo="";
        $publicidad="";
        $idiomas=[];
        $anioFinEstudios="";
        $codigospostales="";
        $comentario="";
        if (isset($_REQUEST['txtNombre'])) {
		    $nombre= $_REQUEST['txtNombre'];
		}
        if (isset($_REQUEST['txtClave'])) {
		    $clave= $_REQUEST['pswClave'];
		}
        if (isset($_REQUEST['rdSemaforo'])) {
		    $semaforo= $_REQUEST['rdSemaforo'];
		}
        if (isset($_REQUEST['cbPublicidad'])) {
		    $publicidad= $_REQUEST['cbPublicidad'];
		}
        if (isset($_REQUEST['cbIdioma[]'])) {
		    $idiomas= $_REQUEST['cbIdioma[]'];
		}
        if (isset($_REQUEST['selAnioFinEstudios'])) {
		    $anioFinEstudios= $_REQUEST['selAnioFinEstudios'];
		}
        if (isset($_REQUEST['selCodigosPostales[]'])) {
		    $codigospostales= $_REQUEST['selCodigosPostales[]'];
		}
        if (isset($_REQUEST['txaComentarios'])) {
		    $comentario= $_REQUEST['txaComentarios'];
		}
        ?>
        Nombre: <?php echo $nombre; ?> <br />
        Clave: <?php echo $clave; ?> <br />
        Semáforo: <?php echo $semaforo; ?> <br />
        Publicidad: <?php echo $publicidad; ?> <br />
        Idiomas: <?php 
        if (count($idiomas) > 0){
            foreach ( $idiomas as $valor ){
            echo "$valor,";
            }
         }else {
             echo " Sin Idiomas ";
         }
    
     ?> <br />
    Año de fin de estudios: <?php echo $anioFinEstudios; ?> <br />
    Lista de los códigos postales de provincias: <?php echo $codigospostales; ?> <br />
    Comentarios: <?php echo $comentarios; ?> <br />
    
            </div>
        </div>
    <hr>
    <?php show_source(__FILE__); ?>
    <hr>
    </body>
    </html>
</body>
</html>