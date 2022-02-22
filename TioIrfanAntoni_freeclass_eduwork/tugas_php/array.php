
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
(
 if($nilai <= 100 ) ( $grade = "A"; )
 if($nilai <  80 )  ( $grade = "B"; )
 if($nilai <  70 )  ( $grade = "C"; )
 if($nilai <  60 )  ( $grade = "D"; )
 if($nilai <  50 )  ( $grade = "E"; )

 return $grade;
);
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
 <?php
 $data = array (
     "0" => array (
		"nama" : "Pelita",
		"kelas" : "Laravel",
		"alamat" : "Bandung",
		"tanggal_lahir" : "1997-12-27",
		"nilai" : 90
     ),
	"1" => array (
		"nama" : "Najmina",
		"kelas" : "Vue JS",
		"alamat" : "Jakarta",
		"tanggal_lahir" : "1998-10-07",
		"nilai" : 55
    ),
    "2" => array (
		"nama" : "Anita",
		"kelas" : "Design",
		"alamat" : "Semarang",
		"tanggal_lahir" : "1999-08-20",
		"nilai" : 80
    ),
	"3" => array (
		"nama" : "Bayu",
		"kelas" : "Digital Marketing",
		"alamat" : "Bandung",
		"tanggal_lahir" : "1990-01-01",
		"nilai" : 65
	),
	"4" => array (
		"nama" : "Nasa",
		"kelas" : "UI/UX Designer",
		"alamat" : "Bandung",
		"tanggal_lahir" : "1995-04-10",
		"nilai" : 70
	),
	"5" => array(
		"nama" : "Rahma",
		"kelas" : "Node JS",
		"alamat" : "Yogyakarta",
		"tanggal_lahir" : "1993-09-15",
		"nilai" : 85
	)
    );
    $json = json_encode($data);
    echo $json;
?>
https://tondanoweb.com/cara-melakukan-konversi-array-ke-json-dan-json-ke-array-pada-php/
</body>
</html>