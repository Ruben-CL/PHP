<head>
    <meta http-equiv="refresh" content="5"/>
</head>
<h1> Ejercicio 7 </h1>
<?php

    $num1=random_int(100,500);
    $num2=random_int(100,500);
    $num3=random_int(100,500);

?>

    <table class='Rojo'>
    <tr> 
        <td > Rojo <?php echo "($num1)" ?> </td> 
    </tr>
    </table>
    <table class='Verde'>
    <tr> 
        <td > Verde <?php echo "($num2)" ?>  </td> 
    </tr>
    </table>
    <table class='Azul'>
    <tr> 
        <td > Azul <?php echo "($num3)" ?>  </td> 
        </tr>
</table>
    <style>
        .Azul{
            width: <?php
            echo $num3 ?>px; 
            background-color:blue;
        }
        .Rojo{
            width: <?php
            echo $num1 ?>px; 
            background-color:red;
        }
        .Verde{
            width: <?php
            echo $num2 ?>px; 
            background-color:green;
        }
    </style>
