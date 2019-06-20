<?php
  $gebruikersnaam = $_GET['gebruikersnaamR'];
  $wachtwoord1 = $_GET['wachtwoordR1'];
  $wachtwoord2 = $_GET['wachtwoordR2'];
  $email = $_GET['email'];

  $bH = true;
  $bG = true;
  $bE = true;

  $id = 0;

  $con = dbConnect();
  $statement = SQLselect($con,'account','*','false','','',0);


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
    $id = $row['id'];
  }
  if($bE == true && $bG == true && $bH == true){
    $id = $id + 1;
    maakAccount($gebruikersnaam, $wachtwoord1, $email, $id);
    header("Location: http://www.jrjweb.nl/myband/public/mail/registeren/account");
  } else if($bG && $bE){
    header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/rH");
  } else if($bH && $bE){
    header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/rG");
  } else if($bH && $bG){
    header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/rE");
  } else if($bH){
    header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/rGE");
  } else if($bG){
    header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/rHE");
  } else if($bE){
    header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/rGH");
  } else {
    header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/rGHE");
  }

?>
