<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<h2>Data Nilai </h2>
	<table border='2' width='100%' bgcolor='yellow' cellspacing='1'>
     
      <tr>

      <?php
      echo "<tr>
               <td style='text-align:center'>  No</td>
               <td style='text-align:center'>  Nama</td>
               
               <td style='text-align:center'>  Kelas</td>
            </tr>";

            echo "<tr>
            <td>1</td>
            </tr>";
            echo "<tr><td>123</td></tr>";
            echo "<tr>";
               for ($row = 0; $row <= 3; $row++) {
                  
                 echo  "<td> Ini perulangan ke-$row</td>";
             echo "</tr>";
               
      
      }?> 

<?php $no = 1;?>
<?php $no++; ?>
   <?php
echo "<table border='1'><br />";

for ($row = 0; $row <= 5; $row++) {
   echo "<tr>";
   echo "<h2>Ini perulangan ke-$row</h2>";
  echo "</tr>";

   for ($col = 0; $col <= 5; $col ++) {
        echo "<td>", (($col + $row) % 5) + 1, "</td>";
   }
   
   echo "</tr>";
}

echo "</table>";
?>
</body>
</html>