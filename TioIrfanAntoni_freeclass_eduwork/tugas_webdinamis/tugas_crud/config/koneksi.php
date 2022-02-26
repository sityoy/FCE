<?php
include "mysql_mysqli.inc.php";
?>
<?php
$host="localhost";
$user="root";
$pass="";
$database="db_cucimobil";

$conn =($GLOBALS["___mysqli_ston"] = mysqli_connect($host,  $user,  $pass));
mysqli_select_db($conn, $database);
?>