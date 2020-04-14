<?php
include "includes/header.php";
include "includes/nav.php";

 ?>

<div class="container">
  <div class="row">
    <div class="col-8 col-md-6">


      <form class="mt-3" action="index.php" method="post">

        <div class="form-group">
          <label for="user">Korisnicko ime</label>
          <input type="text" class="form-control" name="user" value="" required>
        </div>

        <div class="form-group">
          <label for="pass">Sifra</label>
          <input type="password" class="form-control" name="pass" value="" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" name="login" value="Uloguj se">
        </div>

      </form>


    </div>
  </div>
</div>



<?php
 include "includes/foother.php"
  ?>
