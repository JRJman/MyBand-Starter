<?php
  $boolean = false;
  $con = dbConnect();
  $sql = "SELECT * FROM account";
  $statement = $con->query($sql);
  foreach ($statement as $rij) {
    if($tekst === $rij['vertificatie']){
      $boolean = true;
    }
  }
  if($boolean == false){
    header("Location: http://www.jrjweb.nl/myband/public/verboden_voor_jouw");
  }
?>
<form action="http://www.jrjweb.nl/myband/public/php/wachtwoordU" method="post">
  <p>Typ je nieuwe wachtwoord in</p>
  <input type="password" name="wachtwoord1" required>
  <p>Herhaal je wachtwoord</p>
  <input type="password" name="wachtwoord2" required><br>
  <input type="submit" value="verander wachtwoord">
  <input type="hidden" name="ver" value="<?php echo $tekst ?>">
</form>
