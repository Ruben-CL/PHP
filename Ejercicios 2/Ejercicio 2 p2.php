<?php
$num1=random_int(1,10);
$num2=random_int(1,10);
require_once './funcionesvar.php';
$resu;
echo "el número uno es".$num1."<br>";
echo "el número dos es".$num2."<br>";
 $resu=calSuma($num1,$num2);
 echo "la suma es = ".$resu."<br>";
 $resu=calResta($num1,$num2);
 echo "la resta es = ".$resu."<br>";
 $resu=calMultiplicacion($num1,$num2);
 echo "la multiplicación es = ".$resu."<br>";
 $resu=calDivision($num1,$num2);
 echo "la división es = ".$resu."<br>";
 $resu=calModulo($num1,$num2);
 echo "el módulo es = ".$resu."<br>";
 $resu=calPotencia($num1,$num2);
 echo "la potencia es = ".$resu."<br>";
?>