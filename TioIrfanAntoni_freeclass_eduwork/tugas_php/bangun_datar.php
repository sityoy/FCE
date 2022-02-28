<!DOCTYPE html>
<html>
<head>
 <title>Latihan Menghitung Luas Persegi Panjang</title>
</head>
<body>
    <h2><center>Tugas Bangun Datar</center></h2>
        <center>
            <table border="5px" width="350px">
                <tr >
                    <td colspan="1">No</td>
                    <td colspan="3"><b>Persegi Panjang</b></td>
                </tr>
                <tr>
                    <td style="text-align:center" rowspan="3"> 1</td>
                    <td>Panjang</td>
                    <td width="25">:</td>
                    <td>8cm</td>
                </tr>
                    
                <tr>
                  
                    <td>Lebar</td>
                    <td>:</td>
                    <td>5cm</td>
                </tr>
                <tr>
                    <td>Luas</td>
                    <td>:</td>
                    <td>
                        <?php
                            $panjang = 8;
                            $lebar = 5; 
                            $luas; // variabel $luas untuk menampung perhitungan luas

                            $luas = $panjang*$lebar; 
                            echo "Panjang x Lebar <br/>
                            8 cm x 5 cm <br/>";
                            echo $luas; echo "cm<sup>2</sup>";
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="text-align:center" rowspan="4"> 2</td>
                    <td colspan="3"><b>Jajar Genjang</b></td>
                </tr>
                    <tr>
                        <td>Alas</td>
                        <td>:</td>
                        <td>28cm</td>
                    </tr>
                    <tr>
                        <td>Tinggi</td>
                        <td>:</td>
                        <td>14cm</td>
                    </tr>
                    <tr>
                    <td>Luas</td>
                    <td>:</td>
                    <td>
                        <?php
                            $alas = 28; 
                            $tinggi = 14; 
                            $luas; // variabel $luas untuk menampung perhitungan luas

                            $luas = $alas*$tinggi;
                            echo "Panjang x Lebar <br/>
                            28 cm x 14 cm <br/>";
                            echo $luas; echo "cm<sup>2</sup>";
                        ?>
                    </td>
                    </tr>

                    <tr>
                        <td style="text-align:center" rowspan="5"> 3</td>
                        <td colspan="3"><b>Belah Ketupat</b></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>:</td>
                        <td><span>&#189;cm</span></td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>:</td>
                        <td>27cm</td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>:</td>
                        <td>17cm</td>
                    </tr>
                    <tr>
                        <td>Luas</td>
                        <td>:</td>
                    <td>
                        <?php
                            $a = #189;
                            $b = 28;
                            $c = 17;
                            
                            $luas; // variabel $luas untuk menampung perhitungan luas

                            $luas = $a*$b*$c;
                            echo "A x B x C <br/>
                            <span>&#189;cm</span> x 28 cm x 17 cm <br/>";
                            echo $luas; echo "cm<sup>2</sup>";
                        ?>
                    </td>
                    </tr>
                
                    <tr>
                        <td style="text-align:center" rowspan="5">4</td>
                        <td colspan="3"><b>Layang - Layang</b></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>:</td>
                        <td><span>&#189;cm</span></td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>:</td>
                        <td>37cm</td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>:</td>
                        <td>27cm</td>
                    </tr>
                    <tr>
                        <td>Luas</td>
                        <td>:</td>
                    <td>
                        <?php
                            $a = #189;
                            $b = 37;
                            $c = 27;
                            
                            $luas; // variabel $luas untuk menampung perhitungan luas

                            $luas = $a*$b*$c;
                            echo "A x B x C <br/>
                            <span>&#189;cm</span> x 37 cm x 27 cm <br/>";
                            echo $luas; echo "cm<sup>2</sup>";
                        ?>
                    </td>
                    </tr>
                     <tr>
                        <td style="text-align:center" rowspan="5">5</td>
                        <td colspan="3"><b>Layang - Layang</b></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>:</td>
                        <td><span>&#189;cm</span></td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>:</td>
                        <td>37cm</td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>:</td>
                        <td>27cm</td>
                    </tr>
                    <tr>
                        <td>Luas</td>
                        <td>:</td>
                    <td>
                        <?php
                            $a = #189;
                            $b = 37;
                            $c = 27;
                            
                            $luas; // variabel $luas untuk menampung perhitungan luas

                            $luas = $a*$b+$c;
                            echo "A (B + C) <br/>
                            <span>&#189;cm</span>(37cm + 27cm) <br/>";
                            echo $luas; echo "cm<sup>2</sup>";
                        ?>
                    </td>
                    </tr>
                </table>
                <hr>
                
            <center>
                <h4>Happy Coding :)</h4>
            </center>
</body>
</html>