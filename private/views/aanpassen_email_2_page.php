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
<form action="http://www.jrjweb.nl/myband/public/php/emailU" method="post">
  <p>Typ je nieuwe email in</p>
  <input type="email" name="email" required><br>
  <input type="submit" value="versturen">
  <input type="hidden" name="ver" value="<?php echo $tekst; ?>">
</form>
