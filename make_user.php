<?php
include "includes/header.php";
include "includes/nav.php";


 ?>



 <!-- Forma registracije -->
<div class="container">
  <div class="row">
    <div class="col-8 col-md-6">

<?php
if (isset($_POST['create'])) {
  // code...
  include "includes/db.php";

  $ime = mysqli_real_escape_string( $connection, $_POST['ime']);
  $prezime = mysqli_real_escape_string( $connection, $_POST['prezime']);
  $email = mysqli_real_escape_string( $connection, $_POST['email']);
  $new_user = mysqli_real_escape_string( $connection, $_POST['new_user']);
  $pass = mysqli_real_escape_string( $connection, $_POST['pass']);
  $pass_2 = mysqli_real_escape_string( $connection, $_POST['pass_2']);
  $status = mysqli_real_escape_string( $connection, $_POST['status']);
  $komentar = mysqli_real_escape_string( $connection, $_POST['komentar']);

  // Da li su sifre iste
  if ($pass!=$pass_2) {
  // code...
  // Nisu iste sifre
      echo "<h2 class='mt-3'>Niste ukucali iste sifre. Vrati se <a href='make_user.php'>ovde</a></h2>";
  }else {

    $pass2 = password_hash( $pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO korisnici ( ime, prezime, email, username, password, status, comentar) VALUES ( '$ime', '$prezime', '$email', '$new_user', '$pass2', '$status', '$komentar')";
    $create = mysqli_query( $connection, $query);
    if (!$create) {
      // code...
        echo "<h2 class='mt-3'>Zahtev nije poslat, pokusajte kasnije. Vrati se <a href='make_user.php'>ovde</a></h2>";
    }
        echo "<h2 class='mt-3'>Zahtev je uspesno poslat. Vrati se <a href='index.php'>ovde</a></h2>";
  }

// echo "$ime $prezime $email $new_user $pass $status $komentar";

}else{


        include "includes/registracija.php";
}
       ?>

    </div>
  </div>
</div>


<?php
include "includes/foother.php"
 ?>
