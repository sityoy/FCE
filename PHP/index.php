<!DOCTYPE html>
<html> 
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include_once("connect.php");
    $books = mysqli_query($conn, "SELECT buku. *, katalog.nama as nama_katalog, nama_penerbit, nama_pengarang FROM buku
                                  LEFT JOIN katalog ON katalog.id_katalog = buku.id_katalog
                                  LEFT JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                  LEFT JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                  ORDER BY judul ASC" );
    ?>
    <div class="container">

        <div class="row" style="margin: 50px;">
            <div class="col-md-3 text-center">
                <a href="index.php">Buku</a>
            </div>
            <div class="col-md-3 text-center">
                <a href="katalog.php">Katalog</a>
            </div>
            <div class="col-md-3 text-center">
                <a href="penerbit.php">Penerbit</a>
            </div>
            <div class="col-md-3 text-center">
                <a href="pengarang.php">Pengarang</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary btn-sm " href="add.php" role="button">Add New Book </a>
            </div>
        </div>
            <div class="col-md-12">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <td class="text-center">ISBN</td>
                            <td class="text-center">Judul</td>
                            <td class="text-center">Tahun</td>
                            <td class="text-center">Penerbit</td>
                            <td class="text-center">Pengarang</td>
                            <td class="text-center">Katalog</td>
                            <td>Stok</td>
                            <td class="text-center">Harga Pinjam</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                   
                    <tbody>
                        <?php 
                            while($book = mysqli_fetch_array($books)){
                                echo "
                                    <tr>
                                        <td>".$book['isbn']."</td>
                                        <td>".$book['judul']."</td>
                                        <td>".$book['tahun']."</td>
                                        <td>".$book['nama_penerbit']."</td>
                                        <td>".$book['nama_pengarang']."</td>
                                        <td>".$book['nama_katalog']."</td>
                                        <td>".$book['qty_stok']."</td>
                                        <td>".$book['harga_pinjam']."</td>
                                        <td>
                                            <a href='edit.php?isbn=".$book['isbn']."' class='btn btn-warning'>Edit</a>
                                        </td>
                                    </tr>
                                ";
                            }
                        ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>