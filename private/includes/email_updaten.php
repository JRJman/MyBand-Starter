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
    $sql = "UPDATE account SET email='$email', vertificatie='$ver2' WHERE vertificatie='$ver'";
    $con->query($sql);
  }

  if($boolean){
    header("Location: http://localhost:8080/test/public/");
  } else {
    header("Location: http://localhost:8080/test/public/aanpassen/email/" . $ver);
  }
?>
