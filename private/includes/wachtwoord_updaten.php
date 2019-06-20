<?php
  $wachtwoord1 = $_POST['wachtwoord1'];
  $wachtwoord2 = $_POST['wachtwoord2'];
  $ver = $_POST['ver'];
  $boolean = true;
  $ver2 = code();

  if($wachtwoord1 === $wachtwoord2){
    $hash = password_hash($wachtwoord1, PASSWORD_BCRYPT);
    $con = dbConnect();
    $whatColumn = array('wachtwoord','vertificatie');
    $whatVar = array($hash, $ver2);
    $whereColumn = array('vertificatie');
    $whereVar = array($ver);
    SQLupdate($con, 'account', $whatColumn , $whatVar, 2, $whereColumn, $whereVar, 1);
  } else {
    $boolean == false;
  }

  if($boolean){
    header("Location: http://www.jrjweb.nl/myband/public/");
  } else {
    header("Location: http://www.jrjweb.nl/myband/public/aanpassen/wachtwoord/" . $ver);
  }
?>
