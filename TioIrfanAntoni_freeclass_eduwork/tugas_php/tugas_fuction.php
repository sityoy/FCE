<!-- Function menghitung Luas Persegi Panjang -->
<!-- <?php 
// function luas_persegi_panjang($panjang,$lebar)
// {
// 	$hasil = $panjang * $lebar;
// 	echo "Hasil Perhitungan Persegi Panjang, Panjang = <b>".$panjang."</b> & Lebar = <b>".$lebar."</b> = <b>".$hasil."</b><br/>"; 
// }
 
// luas_persegi_panjang(10,5);
// luas_persegi_panjang(7,9);
?> -->
<!-- <br><br> -->
<!-- Function menghitung Luas Segitiga -->
<!-- <?php 
// function luas_segitiga($alas,$tinggi)
// {
// 	$luas = ($alas)/2 * $tinggi;
// 	return $luas;
// }
// echo "Luas Segitiga dengan alas 6 dan tinggi 15 = ".luas_segitiga(6,15);
// echo "<br>";
// echo "Luas Segitiga dengan alas 4 dan tinggi 8 = ".luas_segitiga(4,8);
?>
<br><br> -->

<!-- Menuliskan tipe data pada bagian parameter -->
<?php
// function penjumlahan()
// {
// 	$data_argumen = func_get_args();
// 	$jumlah_argumen = func_num_args();
// 	$nilai_argumen_ke_3 = func_get_arg(2);

// 	echo "Jumlah argumen: $jumlah_argumen";
// 	echo "<br />";
// 	echo "Nilai argumen ke-3: $nilai_argumen_ke_3";
// 	echo "<br />";
// 	echo "Data Array Argumen: ";
// 	var_dump($data_argumen);
// 	echo "<hr />";
// 	return;

// }
// echo "Memanggil Fungsi penjumlahan(1,2,3,4) : ";
// echo "<br />";
// penjumlahan(1,2,3,4);
// echo "Memanggil Fungsi penjumlahan(5,6,7,8,9,10) : ";
// echo "<br />";
// penjumlahan(5,6,7,8,9,10);
?>


<?php

class Luas {
  /** 
    $p adalah panjang
    $l adalah lebar
  */
  public function persegi_panjang($p, $l) {
    return $p * $l;
  }

  /** 
    $s adalah panjang sisi
  */
  public function persegi($s){
    return pow($s,2);
  }

  /** 
    $a adalah alas
    $t adalah tinggi
  */
  public function jajar_genjang($a,$t){
    return $a * $t;
  }

  /** 
    $d1 adalah diagnoal 1
    $d2 adalah diagonal 2
  */
  public function belah_ketupat($d1, $d2){
    return 0.5 * $d1 * $d2;
  }

  /** 
    $d1 adalah diagnoal 1
    $d2 adalah diagonal 2
  */
  public function layang_layang($d1, $d2) {
    return 0.5 * $d1 * $d2;
  }

  /** 
    $a adalah alas
    $t adalah tinggi
  */
  public function segitiga($a,$t){
    return 0.5 * $a * $t;
  }
  /** 
    $r1 adalah panjang rusuk 1
    $r2 adalah panjang rusuk 2
    $t adalah tinggi
  */
  public function trapesium($r1,$r2,$t){
    return 0.5 * ($r1+$r2) * $t;
  }
  
  /** 
    $r adalah jari-jari lingkaran
  */
  public function lingkaran($r) {
    return pi() * (pow($r,2));
  }

}
 echo "HASIL <br><br>";
require_once("tugas_fuction.php");

$luas = new Luas();
    
echo "hitung  Luas Persegi Panjang <br>";
    $p = 4;
    $l = 5;
    echo $luas->persegi_panjang($p,$l);
echo "<br><br>";
    echo "hitung  Luas Persegi <br>";
    $s =4;
    echo $luas->persegi($s,2);
echo "<br><br>";
    echo "hitung  Luas Layang Layang <br>";   
    $d1 =18;
    $d2 =9;
    echo $luas->layang_layang(0.5,$d1,$d2);
echo "<br><br>";
    echo "hitung  Jari jari lingkaran <br>";   
    $r =20;
    echo $luas->lingkaran(pi()*pow($r,2));
echo "<br><br>";
    echo "hitung  Trapesium <br>";   
    $r1 =20;
    $r2 =5;
    $t =45;
    echo $luas->trapesium(0.5,$r1,$r2,$t);
?>


