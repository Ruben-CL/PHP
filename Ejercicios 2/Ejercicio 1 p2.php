<html>
<?php
function Mayor ($A, $B, &$C){
    if ($A<$B){
        $C=$B;
    }
    if ($B<$A){
        $C=$A;
    }
    if ($A==$B){
        $C=0;
    }
}
$num1=random_int(1,10);
$num2=random_int(1,10);
$resu=0;
Mayor ($num1,$num2,$resu);
echo "el numero uno es".$num1."<br>";
echo "el numero dos es".$num2."<br>";
echo "el numero tres es".$resu."<br>";
?>

</html>