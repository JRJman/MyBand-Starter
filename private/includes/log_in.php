<?php
  $gebruikersnaam = $_GET['gebruikersnaamL'];
  $wachtwoord = $_GET['wachtwoordL'];

  $con = dbConnect();
  $whereColmn = array('gebruikersnaam');
  $whereVar = array($gebruikersnaam);
  $statement = SQLselect($con,'account','*','true',$whereColmn,$whereVar,1);

  $id = 0;
  $admin = "";
  $ver = "";
  $b1 = false;
  $b2 = false;
  $bL1 = false;
  $bL2 = false;

  foreach ($statement as $rij) {
    if($gebruikersnaam === $rij['gebruikersnaam']){
      $b1 = true;
    }
    if(password_verify($wachtwoord, $rij['wachtwoord'])){
      $b2 = true;
    }
    if($b1 && $b2){
      if($rij['active'] == "true"){
        $bL1 = true;
        $bL2 = true;
        $id = $rij['id'];
        $ver = $rij['vertificatie'];
        $admin = $rij['admin'];
      } else {
        $bL2 = false;
      }
    }
  }

  if($bL1 == true && $bL2 == true){
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['ver'] = $ver;
    $_SESSION['a'] = $admin;
    header("Location: http://www.jrjweb.nl/myband/public/");
  } else{
    if($b1 && $b2) {
      $bL2 = false;
      $bL1 = true;
    }else if($b1 || $b2){
      $bL2 = true;
    }

    if($bL1 == false && $bL2 == false){
      header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/l3");
    } else if($bL2 == false){
      header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/l2");
    } else if($bL1 == false){
      header("Location: http://www.jrjweb.nl/myband/public/log_in-registeren/fout/l1");
    }
  }
?>
