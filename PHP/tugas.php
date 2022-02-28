<html>
<head>
    <title>Tutorial Membuat Script PHP Menghitung Luas Persegi Panjang</title>
</head>
<body>
    <h2>Form Hitung Luas Persegi Panjang Dengan PHP</h2>
    <h3>Isi Data:</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required ></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <!-- Tulis kode PHP disini -->
    <?php
    if(isset($_POST['submit'])){
        $panjang    =$_POST['panjang'];
        $lebar        =$_POST['lebar'];
               
        // menghitung luas persegi panjang
        $luas_persegi_panjang = $panjang*$lebar;
        // menghitung keliling persegi panjang
        $keliling_persegi_panjang = 2*($panjang+$lebar);
                
        echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang = $panjang<br />";
        echo "Lebar = $lebar<br />";
        echo "Maka luas persegi panjang sama dengan [ $panjang x $lebar ] = $luas_persegi_panjang<br />";
        echo "Maka keliling persegi panjang sama dengan [ 2 x ($panjang + $lebar) ] = $keliling_persegi_panjang";
    }
?>


<br><br><br><br>
<?php
$A = "Tio Irfan Antoni";
$B = "Rumus Menghitung Bangun Ruang"; 
function kubus (){ 
    $sisi = 10; 
    $volume = $sisi*$sisi*$sisi; 
    echo "<b> 1. Rumus Menghitung Volume Kubus</b><br>";
    echo " Rumus Volume : V = S<sup>3</sup><br>";
    echo " Diketahui S adalah panjang rusuk kubus / sisi<br><br>";
    echo " Panjang Sisi Kubus (s) : $sisi cm<br>";
    echo " V = $sisi x $sisi x $sisi <br>";
    echo " Hasil Volume nya adalah : $volume "; 
} 
    function limas (){ 
    $p = 1/3; 
    $la = 48; 
    $t = 16; 
    $volume = $p*$la*$t; 
    echo " <b>2. Rumus Menghitung Volume Limas</b><br>";
    echo " Rumus Volume : V = 1/3 x Luas Alas x Tinggi<br><br>";
    echo " Luas Alas : $la cm<br>";
    echo " Tinggi : $t cm<br>";
    echo " V = 1/3 x $la x $t <br>";
    echo " Hasil Volume nya adalah : $volume "; 
} 
function prisma (){
    $la = 50; 
    $t = 3; 
    $volume = $la*$t; 
    echo "<b> 3. Rumus Menghitung Volume Prisma</b> <br>";
    echo " Rumus Volume : V = Luas Alas x Tinggi<br><br>";
    echo " Luas Alas : $la cm<br>";
    echo " Tinggi : $t cm<br>";
    echo " V = $la x $t<br>";
    echo " Hasil Volume nya adalah : $volume "; 
} 
kubus(); 
echo "<br><br><br>";
limas(); 
echo "<br><br><br>";
prisma(); 
echo "<br><br><br>";
echo " <i>$B</i> <br>";
echo " $A <br>";

?>

</body>
</html>