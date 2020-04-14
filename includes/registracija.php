<form class="mt-3" action="" method="post">

  <div class="form-group">
    <label for="ime">Ime</label>
    <input type="text" class="form-control" name="ime" value="" required>
  </div>

  <div class="form-group">
    <label for="prezime">Prezime</label>
    <input type="text" class="form-control" name="prezime" value="" required>
  </div>

  <div class="form-group">
    <label for="email">Email adresa</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="new_user">Korisnicko ime</label>
    <input type="text" class="form-control" name="new_user" value="" required>
  </div>

  <div class="form-group">
    <label for="pass">Izaberi sifru</label>
    <input type="password" class="form-control" name="pass" value="" required>
  </div>

  <div class="form-group">
    <label for="pass_2">Ponovi sifru</label>
    <input type="password" class="form-control" name="pass_2" value="" required>
  </div>

  <div class="form-check form-group">
    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="nastavnik" checked>
    <label class="form-check-label" for="exampleRadios1">
      Nastavnik
    </label>
  </div>
  <div class="form-check form-group">
    <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="ucenik">
    <label class="form-check-label" for="exampleRadios2">
      Ucenik
    </label>
  </div>

  <div class="form-group">
    <label for="post_content">Komentar</label>
    <textarea class="form-control" name="komentar" rows="6" cols="30">
    </textarea>
  </div>


  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create" value="Posalji zahtev">
  </div>


</form>
