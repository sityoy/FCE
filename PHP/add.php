<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        include_once("connect.php");
        // set_error_handler("var_dump");
        // session_start();
        ob_start();
        $array_penerbit = mysqli_query($conn, "SELECT * FROM penerbit");
        $array_pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
        $array_katalog = mysqli_query($conn, "SELECT * FROM katalog");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>TAMBAH BUKU</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="add.php" method="post" name="form1">
                    <table width="100%" class="table-bordered" cellpadding="10" border="0">
                        <tr>
                            <td>ISBBN</td>
                            <td><input type="text" class="form-control" name="isbn"></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><input type="text" class="form-control" name="judul"></td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td><input type="text" class="form-control" name="tahun"></td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td>
                                <select  class="form-control" name="id_penerbit">
                                    <?php
                                       while($penerbit = mysqli_fetch_array($array_penerbit)){
                                           echo "
                                            <option value=".$penerbit['id_penerbit'].">".$penerbit['nama_penerbit']."</option>
                                           ";
                                       }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td>
                                <select class='form-control' name='id_pengarang'>
                                    <?php                                      
                                        while($pengarang = mysqli_fetch_array($array_pengarang)){
                                            echo "
                                             <option value=".$pengarang['id_pengarang'].">".$pengarang['nama_pengarang']."</option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Katalog</td>
                            <td>
                                <select class='form-control' name='id_katalog'>
                                    <?php
                                        while($katalog = mysqli_fetch_array($array_katalog)){
                                            echo "
                                             <option value=".$katalog['id_katalog'].">".$katalog['nama']."</option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>qty stok</td>
                            <td><input type="text" class="form-control" name="qty_stok" ></td>
                        </tr>
                        <tr>
                            <td>Harga Pinjam</td>
                            <td><input type="text" class="form-control" name="harga_pinjam"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="form-control btn btn-primary" name="Submit" value="Add"> </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['Submit'])) {
        $isbn = $_POST['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $id_penerbit = $_POST['id_penerbit'];
        $id_pengarang = $_POST['id_pengarang'];
        $id_katalog = $_POST['id_katalog'];
        $qty_stok = $_POST['qty_stok'];
        $harga_pinjam = $_POST['harga_pinjam'];
        
        $insert = mysqli_query($conn, "INSERT INTO `buku`(`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`,
        `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang',
        '$id_katalog', '$qty_stok', '$harga_pinjam'); ");
        
        header("Location:index.php");
    } 
?>