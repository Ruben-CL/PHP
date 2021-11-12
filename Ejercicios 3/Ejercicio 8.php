<html>
<style type="text/css">
		  table,th,td{
		      border:1px solid black;
		      border-collapse:collapse;
		  }
</style>          
<table>
		<tr>
        <th>Pais</th>
		<th>Capital</th>
        <th>Poblacion</th>
        <th>Ciudades</th>
		</tr><?php   
		 $max=0;
		 $pmax;
		 $cmax="";
	   $paises = array(
		   'Francia' => array("Capital" => "París", "Poblacion" => "50000000"),
		   'España' => array("Capital" => "Madrid", "Poblacion" => "42000000"),
		   'Italia' => array("Capital" => "Roma", "Poblacion"   => "46000000"),
		   'Argentina' => array("Capital" => "Buenos Aires", "Poblacion" => "40000000"),
		   'Colombia' => array("Capital" => "Bogotá", "Poblacion"  => "36000000"),
		   'Chile' => array("Capital" => "Santiago", "Poblacion"   => "36000000"),
		   'Suecia' => array("Capital" => "Estocolmo", "Poblacion" => "25000000"),
	   );
	   
	   $ciudades = [
		   'Francia' =>    ["París","Burdeos","Niza","Lille","Nantes"],
		   'España' =>     ["Madrid", "Barcelona","León","Sevilla", "Valencia", "Málaga"],
		   'Italia' =>     ["Roma", "Venecia","Florencia","Pisa", "Génova", "Milán", "Turín", "Nápoles"],
		   'Argentina' =>  ["Buenos Aires", "Córdoba","Parana","Rosario"],
		   'Colombia' =>   ["Bogotá", "Medellín","Cali","Barranquilla", "Bucaramanga"],
		   'Chile' =>      ["Santiago", "Arica","Iquique","Osorno", "Viña del Mar"],
		   'Suecia' =>   ["Estocolmo", "Upsala","Gotemburgo","Lund"],
		 ];
		 foreach ($paises as $pais => $infopais) :
?>
<tr>
	 <td><?= $pais?></td>
	 <td><?= $infopais['Capital'] ?></td>
	 <td><?= $infopais['Poblacion']?></td>
	 <td><?php foreach ($ciudades[$pais] as $ciudad) :?> 
           <?= $ciudad . ", " ?>
         <?php endforeach; ?>
	</td>
    <?php endforeach; ?>
    </tr>	 
</table>
</html>