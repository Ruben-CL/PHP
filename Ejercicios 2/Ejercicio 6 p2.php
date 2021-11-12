<?php
$almenas = random_int(1, 10);
echo "$almenas <br/>";
for ($i = 0; $i < 3; $i ++) {
    if ($i == 2) {
        for ($j = 0; $j < $almenas - 1; $j ++) {
            echo "*****";
        }
        echo "****";
    } else {
        for ($h = 0; $h < $almenas; $h ++) {
            echo "****&nbsp";
        }
    }
    echo "<br/>";
}
?>