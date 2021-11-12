<html>
<?php
function generarHTMLTable ( $filas, $columnas, $borde, $contenido){
  echo "<table border=",$borde,"px>";
  for($i=1; $i<=$filas; $i++){
      echo "<tr>";
      for($j=1; $j<=$columnas; $j++){
          echo "<td>".$contenido."</td>";
      }
      echo"</tr>";
  }
  echo "</table>";
}
?>
<?php generarHTMLTable(4,3,5,"Hola Mundo");?>
<hr>
<?php generarHTMLTable(2,6,2,"Hola de nuevo");?>
<hr>
</html>
<style>
  table{
   <?php $borde?> border-collapse:collapse;
  }
  </style>