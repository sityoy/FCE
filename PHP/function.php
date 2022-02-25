<?php

echo "<i>looping FOR</i> <br>";

for($i = 0; $i <= 10; $i++){
    echo "<h2>Ini perulangan ke-$i</h2>";
}

?>
<br>
<?php

echo "<i>looping WHILE</i> <br>";

$ulangi = 20;
while($ulangi > 0) {
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
}
?>
<br><br>
<?php

echo "<i>looping DO WHILE</i> <br>";

$ulangi = 10;
do {
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);
?>
<br><br>
<?php

echo "<i>looping FOREACH</i> <br>";

$books = [
    "Panduan Belajar PHP untuk pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MYSQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";
?>
