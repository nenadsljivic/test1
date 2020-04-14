<?php
$sever = "localhost";
$user = "root";
$password = "";
$baza = "proba1";

$connection = mysqli_connect( $sever, $user, $password, $baza);

if (!$connection) {
  // code...
  die("Connection failed: " . mysqli_connect_error());
}
 ?>
