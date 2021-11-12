<html>
<?php
$medios =  [ "El Pais" => "https://www.elpais.com", "El Mundo" => "https://www.elmundo.es"];
$clavemedio = array_rand($medios);
echo "<p>El Medio recomendado es: <a href=\"". $medios[$clavemedio]. "\">$clavemedio</a></p>";
?>
</html>