<form method="POST" action="casino.php"> 
<p>Error: no dispone de <?= $_SESSION['dinero']?></p>
<p>dispone de  <?= $_SESSION['dinero']?>euros para jugar</p>
<p>cantidad a apostar</p> <input type="number" name="dineroApostado">
<p>par</p><input type="radio" value="par"><p>impar</p><input type="radio" value="impar">
<input type="submit" value="apostar" name="ejecutar">
<input type="submit" value="abandonar" name="ejecutar">
</form>