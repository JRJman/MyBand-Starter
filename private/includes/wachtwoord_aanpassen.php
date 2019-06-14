<?php
  $email = $_POST['email'];
  $b = "false";

  $ver = "";
  $con = dbConnect();
  $sql = "SELECT * FROM account";
  $statement = $con->query($sql);

  foreach ($statement as $rij) {
    if($email == $rij['email']){
      $b = "true";
    }
  }

  echo $b;

  if($b == "false"){
    header("Location: http://localhost:8080/test/public/aanpassen/wachtwoordF");
  } else {
    $sql = "SELECT * FROM account WHERE email='$email'";
    $statement = $con->query($sql);

    foreach ($statement as $rij) {
      $ver = $rij['vertificatie'];
    }

    $onderwerp = "Wachtwoord aanpassen";
    $link = "http://localhost:8080/test/public/aanpassen/wachtwoord/" . $ver;
    $msg = "klik op de link om een nieuw wachtwoord te maken " . $link;

    $result = mail($email, $onderwerp, $msg);

    if(!$result){
      header("Location: http://localhost:8080/test/public/mail/fout/gegaan");
    }else{
      header("Location: http://localhost:8080/test/public/mail/aanpassen/gelukt");
    }
  }
?>
