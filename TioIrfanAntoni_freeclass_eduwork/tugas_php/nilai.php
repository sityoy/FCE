<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai PHP</title>
</head>
<body>
<form action="" method="post">
    <h1>Hitung Nilai AKhir Mahasiswa</h1>
    
    Nilai Absen : <br>
    <input type="text" name="absen"><br>

    Nilai Tugas : <br>
    <input type="text" name="tugas"><br>

    Nilai UTS : <br>
    <input type="text" name="uts"><br> 

    Nilai UAS : <br>
    <input type="text" name="uas"><br><br>
        
    <input type="submit" value="Hitung"><br>
    <b>KALO ERROR TINGGAL ISI</b>

</form>
<?php


$absen  = $_POST['absen'];
$tugas  = $_POST['tugas'];
$uts    = $_POST['uts'];
$uas    = $_POST['uas'];

//menghitung nilai dari yang tadi kita input
$nilai_absen = $absen * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts   = $uts * 0.3;
$nilai_uas   = $uas * 0.4;

//penjumlahan dari nilai-nilai yang sudah diinput
$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

//menampilkan grade berdasarkan hasil nilai akhir
if ($nilai_akhir>=80){
$grade = "A";
} elseif ($nilai_akhir>=70) {
$grade = "B";
} elseif ($nilai_akhir>=50) {
$grade = "C";
} elseif ($nilai_akhir>=40) {
$grade = "D"; 
} else {
$grade = "E";
}

echo "
<h1>Hitung Nilai AKhir Mahasiswa</h1>

Nilai Absen : <b>$nilai_absen</b><br>

Nilai Tugas : <b>$nilai_tugas</b><br>

Nilai UTS   : <b>$nilai_uts</b><br>

Nilai UAS   : <b>$nilai_uas</b><br>

<h4>Nilai Akhir : $nilai_akhir</h4>

<h4>Grade : $grade</h4>
";

?>
    </body>
</html>