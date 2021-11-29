<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Palabra buscar: <?=
    
        implode(" ", $_SESSION["palabraGuiones"]); 
    
    ?></p>
    <p>Palabra entera <?= $_SESSION["palabra"]; ?></p>
    <p>pon una letra</p>
    <p>letras jugadas: <?=$_SESSION["letrasJugadas"]?></p>
    <p>letras jugadas: <?=  $_SESSION["count"]?></p>
    <form method="get" action="logica.php" name="borrar"><input type="submit" value="borrar"></form>
    <form method="post" action="logica.php"><input name="letra" type="text" ><input type="submit" name="jugar" value="jugar"></form>
    
    
</body>
</html>