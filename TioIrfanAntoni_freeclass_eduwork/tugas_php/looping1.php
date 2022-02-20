<?php
for ($i=1; $i<=8; $i++) {
    for ($j=6; $j>=$i; $j--) {
        echo "  ";
    }for ($k=0; $k<=$i; $k++) {
         echo "$k";
    }echo "<br>";
}
?>