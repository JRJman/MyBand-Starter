<?php
  $wachtwoord1 = $_POST['wachtwoord1'];
  $wachtwoord2 = $_POST['wachtwoord2'];
  $ver = $_POST['ver'];
  $boolean = true;
  $ver2 = code();

  if($wachtwoord1 === $wachtwoord2){
    $hash = password_hash($wachtwoord1, PASSWORD_BCRYPT);
    $con = dbConnect();
    $sql = "UPDATE account SET wachtwoord='$hash', vertificatie='$ver2' WHERE vertificatie='$ver'";
    $con->query($sql);
  } else {
    $boolean == false;
  }

  if($boolean){
    header("Location: http://www.jrjweb.nl/myband/public/");
  } else {
    header("Location: http://www.jrjweb.nl/myband/public/aanpassen/wachtwoord/" . $ver);
  }
?>
