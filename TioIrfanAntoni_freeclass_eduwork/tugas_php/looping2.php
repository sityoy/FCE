<?php
echo "<table border='1'><br />";

for ($row = 0; $row < 5; $row ++) {
   echo "<tr>";

   for ($col = 0; $col < 5; $col ++) {
        echo "<td>", (($col + $row) % 5) + 1, "</td>";
   }

   echo "</tr>";
}

echo "</table>";
?>