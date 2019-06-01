<?php
  $gebruikersnaam = $_GET['gebruikersnaamR'];
  $wachtwoord1 = $_GET['wachtwoordR1'];
  $wachtwoord2 = $_GET['wachtwoordR2'];
  $email = $_GET['email'];

  $con = dbConnect();
  $sql = "SELECT * FROM account";
  $statement = $con->query($sql);

  if($wachtwoord1 !== $wachtwoord2){
    $booleanH = false;
  }

  foreach ($statement as $rij) {
    if($gebruikersnaam === $rij['gebruikersnaam']){
      $booleanG = false;
    }
    if($email === $rij['email']){
      $booleanE = false;
    }
  }

  if($booleanE == true && $booleanG == true && $booleanH == true){
    maakAccount($gebruikersnaam, $wachtwoord, $email);
    header("Location: http://localhost/test/public/mail/registeren/account");
  }

?>
