<?php
  $gebruikersnaam = $_GET['gebruikersnaamR'];
  $wachtwoord1 = $_GET['wachtwoordR1'];
  $wachtwoord2 = $_GET['wachtwoordR2'];
  $email = $_GET['email'];

  $bH = true;
  $bG = true;
  $bE = true;

  $con = dbConnect();
  $sql = "SELECT * FROM account";
  $statement = $con->query($sql);

  if($wachtwoord1 !== $wachtwoord2){
    $bH = false;
  }

  foreach ($statement as $rij) {
    if($gebruikersnaam === $rij['gebruikersnaam']){
      $bG = false;
    }
    if($email === $rij['email']){
      $bE = false;
    }
  }
  if($bE == true && $bG == true && $bH == true){
    maakAccount($gebruikersnaam, $wachtwoord1, $email);
    header("Location: http://localhost:8080/test/public/mail/registeren/account");
  } else if($bG && $bE){
    header("Location: http://localhost:8080/test/public/log_in-registeren/fout/rH");
  } else if($bH && $bE){
    header("Location: http://localhost:8080/test/public/log_in-registeren/fout/rG");
  } else if($bH && $bG){
    header("Location: http://localhost:8080/test/public/log_in-registeren/fout/rE");
  } else if($bH){
    header("Location: http://localhost:8080/test/public/log_in-registeren/fout/rGE");
  } else if($bG){
    header("Location: http://localhost:8080/test/public/log_in-registeren/fout/rHE");
  } else if($bE){
    header("Location: http://localhost:8080/test/public/log_in-registeren/fout/rGH");
  } else {
    header("Location: http://localhost:8080/test/public/log_in-registeren/fout/rGHE");
  }

?>
