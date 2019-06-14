<?php
  $wachtwoord = $_POST['wachtwoord'];
  $ver = "";

  $con = dbConnect();
  $sql = "SELECT * FROM account";
  $statement = $con->query($sql);

  foreach ($statement as $rij) {
    if(password_verify($wachtwoord, $rij['wachtwoord'])){
      $ver = $rij['vertificatie'];
    }
  }

  if($ver == ""){
    header("Location: http://localhost:8080/test/public/aanpassen/email");
  } else {
    header("Location: http://localhost:8080/test/public/aanpassen/email/" . $ver);
  }
?>
