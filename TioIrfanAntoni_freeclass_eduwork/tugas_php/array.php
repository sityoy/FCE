<?php
    $array = array(
        array(
            'nama' => 'Tio',
            'umur' => 21,
            'kelas' => 'Laravel'
        ),
        array(
            'nama' => 'Irfan',
            'umur' => 25,
            'kelas' => 'React.js'
        ),
        array(
            'nama' => 'Antoni',
            'umur' => 28,
            'kelas' => 'Python'
        ),
    );
    foreach ($array as $key => $value){
        echo  "Nama : ".$value['nama']. ", umur :".$value['umur']. ', kelas :'.$value['kelas'];
        echo "<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* Fungsi Konversi nilai ke huruf */
/* Created by Daniel Ok */

function grade($nilai)
{
 if($nilai <= 100 ) { $grade = "A"; }
 if($nilai <  80 )  { $grade = "B"; }
 if($nilai <  70 )  { $grade = "C"; }
 if($nilai <  60 )  { $grade = "D"; }
 if($nilai <  50 )  { $grade = "E"; }

 return $grade;
}
?>

<h2>Data Nilai </h2>

<table width="100%" bgcolor="grey" cellspacing="1">
 <tr bgcolor="white">
 <th width="25">No</th>
 <th width="100">Nama</th>
 <th width="100">Kelas</th>
 <th width="100">Alamat</th>
 <th width="100">Tanggal Lahir</th>
 <th width="100">Nilai</th>
 <th width="100">Grade</th>
 </tr>
 
</body>
</html>