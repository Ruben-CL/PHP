<form name='mensaje' method="POST">
    Tema<br>
    <input type="text" name="tema" value="<?= (isset($_REQUEST['tema'])) ? $_REQUEST['tema'] : '' ?>"><br>
    Comentario: <br>
    <textarea name="comentario" rows="10" cols="50"><?= (isset($_REQUEST['comentario'])) ? $_REQUEST['comentario'] : '' ?></textarea>
    <br><br>
    <input type="submit" name="orden" value="Detalles">
    <input type="submit" name="orden" value="Nueva opinión">
    <input type="submit" name="orden" value="Terminar">
</form>