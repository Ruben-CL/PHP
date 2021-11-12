
<?php
$temperaturas =  [ 6, 10, 12, 14,16 ,20 ,25 , 30, 18, 15, 14, 8];
$meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
$mestemperatura= array_combine($meses,$temperaturas);
print_r($mestemperatura);
?>
<html>
    <table>
        
        <tr>
            <td><?php echo $meses; ?></td>
            <td><?php echo $temperaturas;?></td>
</tr>
</table>
</html>