<?php
include "includes/header.php";
include "includes/nav.php";
include "includes/db.php";
 ?>

<div class="container mt-3">

<?php
if (isset($_POST['login'])) {
  // code...
  $user = $_POST['user'];
  $pass = $_POST['pass'];



  $query = "SELECT * FROM korisnici WHERE username = '$user'";
  $rezultat = mysqli_query( $connection, $query);
  if (mysqli_num_rows($rezultat) > 0) {
    // code...
    $red = mysqli_fetch_assoc($rezultat);
    $password = $red['password'];

    if (password_verify( $pass, $password)) {
      // code...
      echo "<h1>Zdravo " . $red['ime'] . ", uspesno ste se ulogovali.</h1>";
    }else {
      // code...
      echo "<h3> Losa sifra </h3>";

    }

  }else {
    // code...
      echo "<h3> Lose ime </h3>";  }


}else {
  // code...
  echo "<h2> Ovo je pocetna stranica </h2>";
}

 ?>

</div>

  <?php
  include "includes/foother.php"
   ?>
