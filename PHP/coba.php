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
         <th style='text-align:center'>  No</th>
         <th style='text-align:center'>  Nama</th>   
         <th style='text-align:center'>  Kelas</th>
      </tr>

      <?php
         
      $i = 0;
               for ($row = 1; $row <= 10; $row++) {
                  echo "<tr>";
                  echo  "<td>$row</td>";
                  echo  "<td> Nama Ke $row</td>";
                  // echo  "<td> Kelas $i</td>";
                  // $i = 1;
                  // do{
                     
                  //    echo "<td>Kelas " . $i . "</td>";
                  //    $i--;
                    
                  // } while($i > 0);
                  // echo "</tr>";
                  // $kelas = [
                  //    "Kelas 1",

                  // ];
                  // foreach($kelas as $kelas1){
                  //    echo "<td>$kelas1</td>";
                  // }
                echo "</tr>";  
         }
           

            
      ?> 

<?php $no = 1;?>
<?php $no++; ?>
   <?php 
   echo "</tr>";
 echo "<table border='1'><br />";

 for ($row = 0; $row <= 5; $row++) {
    echo "<tr>";
    echo "<h2>Ini perulangan ke-$row</h2>";
   echo "</tr>";

    for ($col = 0; $col <= 5; $col ++) {
         echo "<td> asdasds ", (($col + $row) % 5) + 1, "</td>";
   }
   
    echo "</tr>";
 }

 echo "</table>";

// $ulangi = 10;

// do {
//    echo "<p>Inasdasdj ke $ulangi</p>";
//    $ulangi--;
// } while ($ulangi > 0);
?>
</body>
</html>
