<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        html body{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            text-align: center;
        }

        div.section{
            margin: 50px auto;
            display: flex;
        }

        div.container{
            width: 50%;
            margin-left: 50px;
        }
        div.container form{
            display: flex;
            font-size: 20px;
            flex-direction: column;
            font-size: 20px;
        }
        div.container form input{
            font-size: 20px;
            
        }
        input.btn{
            background-color: rgb(127, 220, 251);
            border: none;
            border-radius: 6px;
            padding: 5px;

        }
        input.btn:hover{
            background-color: rgb(169, 222, 240);
            border: none;
            border-radius: 6px;
        }
        span{
            display: inline-block;
            margin-bottom: 10px;
        }
        hr.card-garis{
            width: 80%;
            border: 1px solid rgb(252, 166, 54);;
            
        }
        .card-garis{
            display: inline-block;
            width: 100%;
            margin: 10px 0px 10px 0px;
            
        }
        div.container-card{
            align-items: center;
            margin-left: 50px ;
        }

        div.card{
            display: flex;
            border: 1px solid black;
            width: 350px;
            height: auto;
            align-items: center;
            border-radius: 20px;
            flex-direction: column;
            box-sizing: border-box;
            padding: 20px;
            background-color: rgb(239, 251, 253);
            border: none;
            box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.5);
        }

        .img-card img{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 2px solid rgb(252, 166, 54);
        
        
        }
        .card-body  {
            width: 90%;
        }
        .text-kanan{
            display: block;
            float: right;
            color: rgb(87, 87, 87);
        }
        .text-kanan.warna{
            display: block;
            float: right;
            color: rgb(240, 148, 0);
        }
        .text-kiri{
            display: inline-block;
            color: rgb(87, 87, 87); 
        }
    </style>
</head>
<body>


<?php
error_reporting(0);
if(isset($_POST['hasil'])){
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai'];

    $nilaiakhir = $nilai1;
    if($nilaiakhir >= 90 && $nilaiakhir <= 100){
        $grade ="A";
        $huruf ="LULUS";
    }elseif($nilaiakhir >= 80 && $nilaiakhir <= 90){
        $grade = "B";
        $huruf ="LULUS";
    }elseif($nilaiakhir >= 70 && $nilaiakhir <= 80){
        $grade = "C";
        $huruf ="LULUS";
    }elseif($nilaiakhir >= 0 && $nilaiakhir <= 70){
        $grade = "D";
        $huruf ="LULUS BERSYARAT";
    }else{
        $grade = "E";
        $huruf="TIDAK LULUS";
    }
        

}

?>
<h1>Menghitung Nilai Akhir Mahasiswa</h1>
<div class="section">
<div class="container">
<form method="POST" action="">
<label for="">Nama</label>
<input type="text" 
       name="nama"
       value="<?php echo $nama; ?>">
<br>
<label for="">Nilai</label>
<input type="text" 
       name="nilai1"
       value="<?php echo $nilai1; ?>">
       <br>
       <input class="btn" type="submit" name="submit" value="SUBMIT ">
       <br>
<label>Nilai akhir Mahasiswa</label>
        <input type="text" 
        name="hasil" readonly=""
        value="<?php echo $nilaiakhir; ?>"> 
        <br>
       
       
</form>

</div>
<div class="container-card">
<div class="card">
    <div class="img-card">
        <img src="#" alt="">
    </div>
<hr class="card-garis">
<div class="card-body">
  <span class="text-kiri">Nama :</span> 
  <span class="text-kanan"><?php echo $nama; ?></span><br>
  <span class="text-kiri">Nilai :</span> 
  <span class="text-kanan"><?php echo $nilai1; ?></span><br>
  <span class="text-kiri">Nilai Akhir :</span> 
  <span class="text-kanan warna"><?php echo $nilaiakhir; ?></span><br>
  <span class="text-kiri">Grade :</span>
   <span class="text-kanan warna"><?php echo $grade; ?></span><br>
  <span class="text-kiri">Kelulusan :</span>
   <span class="text-kanan warna"><?php echo $huruf; ?></span><br>

 </div>
</div>
</div>
</div>
</body>
</html>

