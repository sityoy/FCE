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
	 
	 <th width='5'>No</th>
	 <th width='100'>Nama</th>
	 <th width='100'>Tanggal Lahir</th>
	 <th width='100'>Umur</th>
	 <th width='100'>Alamat</th>
	 <th width='100'>Kelas</th>
	 <th width='100'>Nilai</th>
	 <th width='100'>Grade</th>

	<?php $no = 1;
	 ?>
	</tr>
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