<?php
  session_start();
  if(!isset($_SESSION['username'])) {
  header('location:../index.php'); }
  else { $username = $_SESSION['username']; }
  require_once("koneksi.php");
  $query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user WHERE username = '$username'");
  $hasil = mysqli_fetch_array($query);
?>