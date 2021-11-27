<div>
    Detalles:<br>
    <table>
        <tr>
            <td>Longitud: </td>
            <td><?= strlen($_REQUEST['comentario']) ?></td>
        </tr>
        <tr>
            <td>Número de palabras: </td>
            <td><?= contPalabras($_REQUEST['comentario']) ?></td>
        </tr>
        <tr>
            <td>Letra más repetida: </td>
            <td><?= letraMasRepetida($_REQUEST['comentario']) ?></td>
        </tr>
        <tr>
            <td>Palabra más repetida:</td>
            <td><?= palabraMasRepetida($_REQUEST['comentario']) ?></td>
        </tr>
    </table>
</div>