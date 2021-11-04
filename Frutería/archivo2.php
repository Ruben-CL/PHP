<form method="POST" action="FRUTERIA.php"> 
<p>realice su compra <?= $_SESSION['nombre']?></p>
<p>selecciona la fruta
<select id="frutas" name="frutas">
        <option value="Naranja">Naranja</option>
        <option value="Platano">Plátano</option>
        <option value="Manzana">Manzana</option>
        <option value="Limones">Limones</option>
    </select>
</p>
<input type="number" name="cantidad">
<input type="submit" value="añadir" name="ejecutar">
<input type="submit" value="terminar" name="ejecutar">

</form>