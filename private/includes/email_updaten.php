<?php
  $email = $_POST['email'];
  $ver = $_POST['ver'];
  $boolean = false;
  $id = 0;
  $ver2 = code();

  $con = dbConnect();
  $sql = "SELECT * FROM account";
  $statement = $con->query($sql);

  foreach ($statement as $rij) {
    if($ver === $rij['vertificatie']){
      $boolean = true;
    }
  }

  if($boolean == true){
    $whatColumn = array('email','vertificatie');
    $whatVar = array($email,$ver2);
    $whereColumn = array('vertificatie');
    $whereVar = array($ver);
    $statement = SQLupdate($con, 'account', $whatColumn, $whatVar, 2, $whereColumn, $whereVar, 1);
    $statement;
  }

  if($boolean){
    header("Location: http://www.jrjweb.nl/myband/test/public/");
  } else {
    header("Location: http://www.jrjweb.nl/myband/test/public/aanpassen/email/" . $ver);
  }
?>
