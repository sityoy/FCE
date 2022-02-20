<?php

    $nama = "Tio Irfan Antoni";
    $jenis_kelamin = "Laki - Laki";
    $tahun_lahir = 2001;
    $umur = date ('Y') - $tahun_lahir;

    if ($jenis_kelamin == "Laki - Laki") {
        echo "Selamat pagi, Tuan $nama <br>";
        echo "Umur anda sekarang $umur";
    } else {
        echo "Selamat pagi, Nyonya $nama <br>";
        echo "Umur anda sekarang $umur";
    }

?>