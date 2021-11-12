<html>
<?php
$medios =  [ "El Pais" => "https://www.elpais.com", "El Mundo" => "https://www.elmundo.es"];
echo "<h1>Lista de Medios: </h1><ul>";
		foreach ($medios as $clave => $valor){
		    echo "<li> <a href=\"$valor\">$clave</a></li>";
		}
		echo "</ul>";
?>
</html>