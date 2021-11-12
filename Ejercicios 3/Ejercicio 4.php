<?php
$deportes = array(
    'Baloncesto'	 => "img/baloncesto.jpeg",
    'tenis' 			 => "img/tenis.png",
    'Futbol'		 => "img/futbol.jpeg",
);

?>
<html>
<head>
		<style type="text/css">
		  table,th,td{
		      border:1px solid black;
		      border-collapse:collapse;
		  }
		  img{
		   display:block;
		   margin-left:auto;
		   margin-right:auto;
		   width:80;
		  }
		</style>
	</head>
	<table>
		<tr>
			<th>Deporte</th>
			<th>logo</th>
		</tr><?php 
foreach ($deportes as $clave => $valor){ ?>
<tr>
			<td><?= $clave ?></td>
			<td> <img src="<?= $valor ?>" alt="<?= $clave ?>"></td>
		</tr>
<?php }?>
	</table>
    

</html>