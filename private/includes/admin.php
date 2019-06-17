<?php
  session_start();
  $boolean = false;
  if(!empty($_SESSION['a'])){
    if($_SESSION['a'] == "true"){
      $boolean = true;
    }
  }
  if(!$boolean){
    header("Location: http://localhost/test/public/");
  } else {
    $con = dbConnect();
    $sql = "UPDATE account SET admin='true' WHERE id=$variable";
    $con->query($sql);
    header("Location: http://localhost/test/public/admin");
  }
?>
