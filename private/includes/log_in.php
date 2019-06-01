<?php
  $con = dbConnect();
  $sql = "SELECT * FROM account";
  $statement = $con->query($sql);
  $id = 0;
  $ver = "";

  $gebruikersnaam = $_GET['gebruikersnaamL'];
  $wachtwoord = $_GET['wachtwoordL'];

  foreach ($statement as $rij) {
    if($gebruikersnaam = $rij['gebruikersnaam']){
      if(password_verify($wachtwooord, $rij['wachtwoord'])){
        if($rij['active'] == "true"){
          $booleanL = true;
          $id = $rij['id'];
          $ver = $rij['vertificatie'];
        }
      }
    }
  }

  if($booleanL == true){
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['ver'] = $ver;
    header("Location: http://localhost/test/public/");
  }

?>
