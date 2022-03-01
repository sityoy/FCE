
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
         
      $u = 10;
               for ($row = 1; $row <= 10; $row++) {
                  echo "<tr>";
                  echo  "<td style='text-align:center' width='40'>$row</td>";
                  echo  "<td> Nama Ke $row</td>";
                  do{
                      echo "<td>Kelas $u</td>";
                      $u--;
                  } while ($u > 10);
                echo "</tr>";  
         }
           

            
      ?> 
</body>
</html>