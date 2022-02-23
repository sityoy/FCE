<?php

use LDAP\Result;

$servername = "localhost";
$database = "db_cucimobil";
$username = "root";
$pass = "";

// Create Connection
$conn = mysqli_connect($servername, $username, $pass, $database);

// Check Connection

if (!$conn) {
    die ("Connection Failed : " . mysqli_connect_error());
}

// echo "Connect Sukses Baby";
// mysqli_close($conn);

$sql = "SELECT * FROM pendaftaran";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()){
        echo "Customer: " . $row["id_customer"]. " - " . $row["jam_pendaftaran"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>