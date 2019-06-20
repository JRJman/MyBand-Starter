<?php
  $email = $_POST['email'];
  $b = "false";

  $ver = "";
  $con = dbConnect();
  $statement = SQLselect($con,'account','*','false','','',0);


foreach ($statement as $rij) {
    if($email == $rij['email']){
      $b = "true";
    }
  }

  echo $b;

  if($b == "false"){
    header("Location: http://www.jrjweb.nl/myband/public/aanpassen/wachtwoordF");
  } else {
    $whereColumn = array('email');
    $whereVar = array($email);
    $statement = SQLselect($con,'account','*','true',$whereColumn,$whereVar,1);

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
