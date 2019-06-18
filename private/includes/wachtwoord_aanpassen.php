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
    header("Location: http://www.jrjweb.nl/myband/public/aanpassen/wachtwoordF");
  } else {
    $sql = "SELECT * FROM account WHERE email='$email'";
    $statement = $con->query($sql);

    foreach ($statement as $rij) {
      $ver = $rij['vertificatie'];
    }

    $onderwerp = "Wachtwoord aanpassen";
    $link = "http://www.jrjweb.nl/myband/public/aanpassen/wachtwoord/" . $ver;
    $msg = "klik op de link om een nieuw wachtwoord te maken " . $link;

    $result = mail($email, $onderwerp, $msg);

    if(!$result){
      header("Location: http://www.jrjweb.nl/myband/public/mail/fout/gegaan");
    }else{
      header("Location: http://www.jrjweb.nl/myband/public/mail/aanpassen/gelukt");
    }
  }
?>
