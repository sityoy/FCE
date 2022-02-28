<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nilai Grade</title>
    </head>
    <body>
 <center><h3> MASUKKAN NILAI PLISS!!!</h3></center>
        <form method="POST">
   <table width="450" border="1" align="center" border color="#0000FF" bgcolor="#F17F1C">
  
      <td><strong>Masukkan Nilai Mu</strong></td>
      <td><input name="nilai1" type="text" value ="<?php echo $nilai1; ?>"/></br></td> 
      <td><center> <input type="submit" name="submit" value="SUBMIT"/><br/></td></center>
  </table>
  <table width="450" border="1" align="center" border color="#0000FF" bgcolor="#ACE72D">
            <td><center><?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0 && $nilai1 <= 70) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = D.  <br> Keterangan = REMEDIAL. ';
            } else if ($nilai1 >= 70 && $nilai1 <= 80) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = C.  <br> Keterangan = LULUS BERSYARAT. ';
            } else if ($nilai1 >= 80 && $nilai1 <= 90) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = B.  <br> Keterangan = LULUS. ';
            } else if ($nilai1 >= 90 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A.  <br> Keterangan = LULUS. ';
            }   
   else{
                echo 'Nilai : ' . $nilai1 . ' Jangan Suka-Suka Kau Memasukkan Nilai TU.';
            }
          ?> </td></center> 
        </form>
  </table>
  <center><span class="copy-text">Copyright &copy; <?= date('Y'); ?> - Tio Iran Antoni</span></center>
    </body>
</html>